
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class demande_model extends CI_Model{
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
    return $this->db->set('depart_souhaiter', $depart)
    ->set('arivee_souhaiter', $destination)
    ->set('date_souhaiter', $date)
    ->set('heure_souhaiter', $heure)
    ->set('nbre_place_demander', $nbre_place)
    ->set('ID_passager', $ID)
    ->insert('demande');

  }
  public function Affichertableau(){
    return $this->db->select('*')
                ->from('demande')
                ->join('utilisateur', 'demande.ID_passager = utilisateur.ID_utilisateur', 'left')
                ->get()
                ->result();
}}
