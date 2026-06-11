<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Connecter_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function authentif($ID,$mdp){
        $this->db->where('ID_utilisateur', $ID);
        $this->db->where('Mdp', $mdp);
        $query = $this->db->get('utilisateur');

                if ($query->num_rows() > 0) {
                    return true;
                } else {
                    return false;
                }
    }

    public function PrendreInforCompte($ID) {

        $this->db->select('ID_utilisateur,Nom,Prenom,Adresse,mail,Numero,Mdp');
        $this->db->where('ID_utilisateur', $ID);
        $query = $this->db->get('utilisateur');
        return $query->row();
    }
}  