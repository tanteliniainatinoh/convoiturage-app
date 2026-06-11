
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class publication_model extends CI_Model{
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
  
  
  public function AffichertableauPro($ID){
    return $this->db->select('*')
                ->from('proposition')
                ->where('ID_conducteur', $ID)
                ->get()
                ->result();

  }
  public function AffichertableauDem($ID){
    return $this->db->select('*')
                ->from('demande')
                ->where('ID_passager', $ID)
                ->get()
                ->result();

  } 
 public function supprimerPro($ID,$id_post){
    return $this->db->where('ID_conducteur', $ID)
    ->where('ID_proposition', $id_post)
    ->delete('proposition');

 }
 public function supprimerDem($ID,$id_dem){
    return $this->db->where('ID_passager', $ID)
    ->where('ID_demande', $id_dem)
    ->delete('demande');

 }
 public function supprimerReservation($id_post){
  return $this->db->where('Numpublication', $id_post)
    ->delete('reservation');

 }
}
