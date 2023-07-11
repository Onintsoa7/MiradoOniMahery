<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mirado extends CI_Model{
    public function verifier_login($nom , $mdp){
        $query = "select * from utilisateur where (email= '%s' or nom='%s') and motdepasse='%s'";
        $query = sprintf($query,$nom,$nom,$mdp);
        $result=$this->db->query($query);
        echo $query;
        $array=$result->result_array();
        if(count($array)==1){
            return $array[0];
        } else {
            return false;
        }
    }

    public function insert_utilisateur($nom,$contact,$email,$mdp){
        $query = "insert into utilisateur values (default,'%s','%s','%s','%s')";
        $query = sprintf($query,$nom,$email,$mdp,$contact);
        echo ($query);
        $this -> db -> query($query);
    }

    public function max_id_profil_utilisateur($idutilisateur){
        $sql = "select * from profil where etat = 1 and idutilisateur = ".$idutilisateur." order by idutilisateur desc limit 1";
        echo $sql;
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }

    public function update_max_id_profil($idutilisateur){
        $sql = "update profil set etat = 0 where idutilisateur = ".$idutilisateur;
        echo $sql;
        $this -> db -> query($sql);
    }

    public function insert_profil($idutilisateur,$poids,$taille,$idgenre){
        $sql = "insert into profil values(default,%u,'%s',%u,%u,1)";
        $sql = sprintf($sql,$idutilisateur,$poids,$taille,$idgenre);
        //echo ($query);
        $this -> db -> query($sql);
    }

    public function insert_objectif_client($idobjectif,$idutilisateur,$quantite){
        $sql = "insert into objectifclient values (default,%u,%u,%u)";
        $sql = sprintf($sql,$idutilisateur,$idobjectif,$quantite);
        echo $sql;
        $this -> db -> query($sql);
    }
    public function objectif(){
        $sql = "select * from objectif";
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }
    public function code(){
        $sql = "select * from code";
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }

    public function verification_disponibilite_code($idcode){
        $sql = "select * from code where idcode = ".$idcode;
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }

    public function update_code($idcode,$idutilisateur){
		$sql = "update code set idutilisateur =".$idutilisateur." , etat = 5 where idcode = ".$idcode;
        // echo $sql;
        $this -> db -> query($sql);
    }
    public function insert_wallet($idutilisateur,$montant){
        $sql = "insert into portemonnaie value (%u,%u)";
        
        $sql = sprintf($sql,$idutilisateur,$montant);
        echo $sql;
        $this->db->query($sql);
    }

    public function redirect_objectif($idutilisateur){
        $sql = "select * from objectifclient where idutilisateur = ".$idutilisateur." order by id desc";
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }
    
    public function liste_regime($idobjectidf){
        $sql = "select * from regime_alimentaire_relation 
        join regime
        on regime.id = regime_alimentaire_relation.idregime
        join regime_alimentaire
        on regime_alimentaire.id = regime_alimentaire_relation.id_regime_alimentaire where idobjectif=".$idobjectidf;
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }

    public function prix_par_regime($idobjectif){
        $sql = "select sum(prix) as total,idregime,regime_alimentaire.nom,duree,poidsvariation from regime_alimentaire_relation 
        join regime
        on regime.id = regime_alimentaire_relation.idregime
        join regime_alimentaire
        on regime_alimentaire.id = regime_alimentaire_relation.id_regime_alimentaire  where idobjectif = ".$idobjectif." group by duree,nom,idregime";
        $sql = $this->db->query($sql);
        return $sql->result_array();
        
    }

    public function information($idutilisateur){
        $sql = "select utilisateur.*,profil.* from utilisateur
        join profil
        on profil.idutilisateur = utilisateur.id
        left join genre
        on genre.id = profil.idgenre where etat = 1 and utilisateur.id = ".$idutilisateur;
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }

    public function liste_repas($idobjectif){
        $sql = "select * from regime where idobjectif = ".$idobjectif;
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }
    public function liste_sport($idobjectif){
        $sql="select * from sport where id = ".$idobjectif;
        $sql = $this->db->query($sql);
        return $sql->result_array();
    } 

    public function montant_portemonnaie($idutilisateur){
        $sql = "select * from portemonnaie where idutilisateur=".$idutilisateur;
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }
    
    public function comparaison($idutilisateur, $montant){
        $monargent = $this->montant_portemonnaie($idutilisateur);
        echo $montant;
        echo $monargent[0]['montant'];
        if(($montant > $monargent[0]['montant']) and ($monargent[0]['montant']-$montant) < 0){
            return false;
        }else{
            $this->diminuer_monnaie($idutilisateur, $montant);
            $this->updatecaisse($montant);
            return true;
        }
    }
    
    public function diminuer_monnaie($idutilisateur, $monnaie_en_moins)
    {        
        $array = $this->montant_portemonnaie($idutilisateur);
        $array[0]['montant'] = $array[0]['montant'] - $monnaie_en_moins;
        $sql = "update portemonnaie set montant = " .$array[0]['montant']." where idutilisateur = " . $idutilisateur;
        $this->db->query($sql);
    }
    public function all_supposition(){
        $sql = "select sum(prix) as total,idregime,regime_alimentaire.nom,duree,poidsvariation from regime_alimentaire_relation 
        join regime
        on regime.id = regime_alimentaire_relation.idregime
        join regime_alimentaire
        on regime_alimentaire.id = regime_alimentaire_relation.id_regime_alimentaire  group by duree,nom,idregime";
        $sql = $this->db->query($sql);
        return $sql->result_array();
    }
    
    public function updatecaisse($montant){
        $sql = "insert into caisse (montant, datereception) values (%f, now())";
        
        $sql = sprintf($sql,$montant);
        echo $sql;
        $this->db->query($sql);
    }
}
?>