
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class proposition_model extends CI_Model{
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
  
  public function ajouter($ID,$depart, $destination, $date, $heure, $nbre_place){
    return $this->db->set('depart', $depart)
    ->set('destination', $destination)
    ->set('date_depart', $date)
    ->set('heure_depart', $heure)
    ->set('nbre_place', $nbre_place)
    ->set('ID_conducteur', $ID)
    ->insert('proposition');

  }
  public function Affichertableau(){
    return $this->db->select('*')
                ->from('proposition')
                ->join('utilisateur', 'proposition.ID_conducteur = utilisateur.ID_utilisateur', 'left')
                ->where('proposition.nbre_place >=', 1)
                ->get()
                ->result();
}
public function reserverData($ID,$id_post,$nombre){

  return $this->db->set('ID_interesser', $ID)
    ->set('Numpublication', $id_post)
    ->set('nombrePlace', $nombre)
    ->insert('reservation');
  

}
 public function reduireNombre($id_post,$reste){
  return $this->db->set('nbre_place', $reste)
  ->where('ID_proposition', $id_post)
  ->update('proposition');

 }
 public function compter($ID){
  return $this->db->select('*')
  ->from('proposition')
  ->where('ID_conducteur', $ID)
  ->where('nbre_place =', 1)
  ->get()
->result();
 }

}
