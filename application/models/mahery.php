<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahery extends CI_Model
{


    public function avoir_quantite_composition($id_compo ,$id_regime)
    {
        $query = "select quantite from composition_regime where idregime =".$id_regime." and idcomposition =".$id_compo;
        $result = $this->db->query($query);
        $array = $result->result();
        return $array[0]->quantite;
    }

    public function avoir_quantite_regime($id_regime)
    {
        $query = "select sum(quantite) as sum from composition_regime where idregime = ".$id_regime;
        $result = $this->db->query($query);
        $array = $result->result();
        return $array[0]->sum;
    }


    public function avoir_pourcentage($id_compo ,$id_regime)
    {
        $qt = $this->avoir_quantite_composition($id_compo ,$id_regime);
        $tot = $this->avoir_quantite_regime($id_regime);
        return ($qt * 100)/$tot;
    }

    // avoir la le montant de la caisse durant les mois de l'annee en cours
    public function avoir_caisse()
    {
        $query = "select sum(montant) as montant,datereception as date , month(datereception) as mois 
        from caisse where year(datereception) = year(now())
        group by month(datereception)  
        order by month(datereception) asc";
        $result = $this->db->query($query);
        $array = $result->result();
        if (isset($array)) {
            return $array;
        }
        return false;
    }

    public function max_mois_caisse()
    {
        $query = "select  max(month(datereception)) as max from caisse ";
        $result = $this->db->query($query);
        $array = $result->result();
        return $array[0]->max;
    }

    public function avoir_composition_regime($id_regime)
    {
        $query = "select * from composition_regime where idregime = ".$id_regime ;
        $result = $this->db->query($query);
        $array = $result->result();
        return $array;
    }
    public function avoir_nom_composition($id_composition)
    {
        $query = "select * from composition where id = ".$id_composition ;
        $result = $this->db->query($query);
        $array = $result->result();
        return $array[0]->nom;
    }

    public function avoir_code()
    {
        $query = "select count(month(datedevalidation)) as nombre , month(datedevalidation) as mois from code 
        group by month(datedevalidation) order by datedevalidation asc";
        $result = $this->db->query($query);
        $array = $result->result();
        if (isset($array)) {
            return $array;
        }
        return false;
    }

    public function max_mois_code()
    {
        $query = "select  max(month(datedevalidation)) as max from code ";
        $result = $this->db->query($query);
        $array = $result->result();
        return $array[0]->max;
    }

}

?>