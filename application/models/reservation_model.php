
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class reservation_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    public function info_Profil($ID) {
        return $this->db->select('ID_utilisateur,Nom,Prenom,Adresse,mail,Numero,Mdp')
        ->from('utilisateur')
        ->where('ID_utilisateur', $ID)
        ->get()
    ->result();
    }
    public function Affichertableau($ID){
        return $this->db->select('*')
                    ->from('reservation')
                    ->join('proposition', 'proposition.ID_proposition = reservation.Numpublication', 'left')
                    ->join('utilisateur', 'proposition.ID_conducteur = utilisateur.ID_utilisateur', 'left')
                   ->where('ID_interesser', $ID)
                    ->get()
                    ->result();
    }
    public function annuler($id_reserv){
        return $this->db->where('ID_reservation', $id_reserv)
                    ->delete('reservation');
    }
    public function averinaPlace($id_post,$retour) {
        return $this->db->set('nbre_place', $retour)
        ->where('ID_proposition', $id_post)
        ->update('proposition');

    }

public function ModifierNombre($id_reserv,$nombre){

    return $this->db->set('nombrePlace', $nombre)
    ->where('ID_reservation', $id_reserv)
    ->update('reservation');
}

public function ajouterPlace($id_post,$donc){

    return $this->db->set('nbre_place', $donc)
    ->where('ID_proposition', $id_post)
    ->update('proposition');
}
}  