<?php
defined('BASEPATH') or exit('No direct script access allowed');

class oni extends CI_Model
{
    public function verifier_login($nom, $mdp)
    {
        $query = "select * from administrateur where (email= '%s' or nom='%s') and motdepasse='%s'";
        $query = sprintf($query, $nom, $nom, $mdp);
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) == 1) {
            return $array[0];
        } else {
            return false;
        }
    }

    public function utilisateurs($id)
    {
        if ($id == 0) {
            $query = "select * from utilisateur";
        } else {
            $query = "select * from utilisateur where id = " . $id;
        }
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) != 0) {
            return $array;
        } else {
            return false;
        }
    }

    public function getsport($id)
    {
        if ($id == 0) {
            $query = "select * from sport";
        } else {
            $query = "select * from sport where id = " . $id;
        }
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) != 0) {
            return $array;
        } else {
            return false;
        }
    }

    public function getcomposition()
    {
        $query = "select * from composition";
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) != 0) {
            return $array;
        } else {
            return false;
        }
    }

    public function getregime($id)
    {
        if ($id == 0) {
            $query = "select * from regime";
        } else {
            $query = "select * from regime where id = " . $id;
        }
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) != 0) {
            return $array;
        } else {
            return false;
        }
    }


    public function getregime_alimentaire($id)
    {
        if ($id == 0) {
            $query = "select * from regime_alimentaire";
        } else {
            $query = "select * from regime_alimentaire where id = " + $id;
        }
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) != 0) {
            return $array;
        } else {
            return false;
        }
    }
    public function getregime_alimentaire1($id)
    {
        if ($id == 0) {
            $query = "select * from regime_alimentaire_relation";
        } else {
            $query = "select * from regime_alimentaire_relation where id = " + $id;
        }
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) != 0) {
            return $array;
        } else {
            return false;
        }
    }
    public function get_sum_regime($id)
    {
        if ($id == 0) {
            $query = "SELECT SUM(regime.prix) as prix,SUM(poidsvariation) as poidsvariation,regime_alimentaire.id as idregime
                    FROM regime_alimentaire_relation
                    JOIN regime ON regime.id = regime_alimentaire_relation.idregime
                    JOIN regime_alimentaire ON regime_alimentaire.id = regime_alimentaire_relation.id_regime_alimentaire";
        } else {
            $query = "SELECT SUM(regime.prix) as prix,SUM(poidsvariation) as poidsvariation,regime_alimentaire.id as idregime
                    FROM regime_alimentaire_relation
                    JOIN regime ON regime.id = regime_alimentaire_relation.idregime
                    JOIN regime_alimentaire ON regime_alimentaire.id = regime_alimentaire_relation.id_regime_alimentaire
                    WHERE regime_alimentaire.id = " . $id;
        }
        $result = $this->db->query($query);
        $row = $result->row_array();
        $total = $row;
        return $total;
    }


    public function getregime_alimentaire_relation($id)
    {
        if($id == 0)
        {$query = "
            SELECT regime_alimentaire_relation. id, regime_alimentaire.nom as nomr, regime.id as idr, regime_alimentaire.id AS id_regime_alimentaire, regime_alimentaire.duree, regime.nom, regime.prix, regime.poidsvariation
    FROM regime_alimentaire_relation
    JOIN regime ON regime.id = regime_alimentaire_relation.idregime
    JOIN regime_alimentaire ON regime_alimentaire.id = regime_alimentaire_relation.id_regime_alimentaire
    ";
}else{
    $query = "
            SELECT regime_alimentaire_relation. id, regime_alimentaire.nom as nomr, regime.id as idr, regime_alimentaire.id AS id_regime_alimentaire, regime_alimentaire.duree, regime.nom, regime.prix, regime.poidsvariation
    FROM regime_alimentaire_relation
    JOIN regime ON regime.id = regime_alimentaire_relation.idregime
    JOIN regime_alimentaire ON regime_alimentaire.id = regime_alimentaire_relation.id_regime_alimentaire
    where id_regime_alimentaire = ".$id ;
}
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) != 0) {
            return $array;
        } else {
            return false;
        }
    }

    //1 = utilisable
    //11 = non utilisable
    //5 = en cours de demande
    public function getcode($etat)
    {
        if ($etat == 0) {
            $query = "select * from code where etat = 5";
        } elseif ($etat == 1) {
            $query = "select * from code where etat = 1";
        } elseif ($etat == 11) {
            $query = "select * from code where etat = 11";
        }
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) != 0) {
            return $array;
        } else {
            return false;
        }
    }

    public function augmenter_monnaie($idutilisateur, $monnaie, $idcode)
    {
        $query = "select * from portemonnaie where idutilisateur = %u";
        $query = sprintf($query, $idutilisateur);
        $result = $this->db->query($query);
        $array = $result->result_array();
        if (count($array) == 1) {
            $idcompte = $array[0]['idutilisateur'];
            $monnaie = $monnaie + $array[0]['montant'];
            $sql = "update portemonnaie set montant = " .$monnaie ." where idutilisateur = " .$idcompte;
            $sql1 = " update code set etat = 11 where idcode = " .$idcode;
            $this->db->query($sql);
            $this->db->query($sql1);
        } else {
            return false;
        }
    }

    public function insertion_regime($nom, $poidsvariation, $prix, $objectif)
    {
        if ($objectif == 1) {
            $poidsvariation = -1 * $poidsvariation;
        }
        $query = "insert into regime values (default, '%s', %f, %f, %u)";
        $sql = sprintf($query, $nom, $poidsvariation, $prix, $objectif);
        $this->db->query($sql);
    }
    public function supprimerregime($idregime)
    {
        $query = "delete from regime where id = %u";
        $sql = sprintf($query, $idregime);
        $this->db->query($sql);
    }
    public function supprimersport($idsport)
    {
        $query = "delete from sport where id = %u";
        $sql = sprintf($query, $idsport);
        $this->db->query($sql);
    }

    public function insertion_sport($nom, $poidsvariation, $prix, $objectif)
    {
        if ($objectif == 1) {
            $poidsvariation = -1 * $poidsvariation;
        }
        $query = "insert into sport values (default, '%s', %f, %u)";
        $sql = sprintf($query, $nom, $poidsvariation, $prix, $objectif);
        $this->db->query($sql);
    }

    public function update_sport($nom, $poidsvariation, $objectif, $idsport)
    {
        $query = "update sport set nom = '%s' ,poidsvariation = %f ,idobjectif = %u where id = %u";
        $sql = sprintf($query, $nom, $poidsvariation, $objectif, $idsport);
        echo $sql;
        $this->db->query($sql);
    }

    public function max_regime(){
        $query1 = "SELECT MAX(id) AS max_id FROM regime";
        $result = $this->db->query($query1);
        $array = $result->result_array();
        $val = $array[0]['max_id'];
        return $val;
    }
    public function update_regime($nom, $poidsvariation, $prix, $objectif, $idsport)
    {
        $query = "update regime set nom = '%s' ,poidsvariation = %f ,prix = %u ,idobjectif = %u where id = %u";
        $sql = sprintf($query, $nom, $poidsvariation, $prix, $objectif, $idsport);
        echo $sql;
        $this->db->query($sql);
    }

    public function insertion_regime_alimentaire($nom, $duree, $tab)
    {
        $query = "insert into regime_alimentaire values (default,'%s', %f, default)";
        $sql = sprintf($query,$nom, $duree);
        $this->db->query($sql);

        $query1 = "SELECT MAX(id) AS max_id FROM regime_alimentaire";
        $result = $this->db->query($query1);
        $array = $result->result_array();
        $val = $array[0]['max_id'];

        for ($i = 0; $i < count($tab); $i++) {
            $query2 = "insert into regime_alimentaire_relation values (default, %u, %u)";
            $sql1 = sprintf($query2, $val, $tab[$i]);
            $this->db->query($sql1);
        }
    }
    public function update_regime_alimentaire($id, $nom, $duree, $tab)
    {
        $query = "UPDATE regime_alimentaire SET nom = '%s' , duree = %f WHERE id = %u";
        $sql = sprintf($query, $nom, $duree, $id);
        $this->db->query($sql);
    
        $this->db->delete('regime_alimentaire_relation', array('id_regime_alimentaire' => $id));
    
        for ($i = 0; $i < count($tab); $i++) {
            $query2 = "INSERT INTO regime_alimentaire_relation VALUES (default, %u, %u)";
            $sql1 = sprintf($query2, $id, $tab[$i]);
            $this->db->query($sql1);
        }
    }
    
    public function insertion_composition_regime($idregime, $idcomposition, $id)
    {
        $query = "insert into composition_regime values (default,%u, %u, %f)";
        $sql = sprintf($query,$idregime, $idcomposition, $id);
        $this->db->query($sql);
    }

    
    public function monnaie_de_porte_feuille($idutilisateur)
    {
        $query = "select * from portemonnaie where idutilisateur = %u";
        $query = sprintf($query, $idutilisateur);
        $result = $this->db->query($query);
        $array = $result->result_array();
        return $array[0];
    }

    public function diminuer_monnaie($idutilisateur, $monnaie_en_moins)
    {
        $array = $this->monnaie_de_porte_feuille($idutilisateur);
        $idcompte = $array['montant'];
        $array['montant'] = $array['montant'] - $monnaie_en_moins;
        $sql = "update portemonnaie set montant = " + $array['montant'] + " where idutilisateur = " + $idcompte;
        $this->db->query($sql);
    }

}
