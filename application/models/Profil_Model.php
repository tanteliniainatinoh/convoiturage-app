
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil_Model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }


    public function info_Profil($ID) {
        return $this->db->select('ID_utilisateur,Nom,Prenom,Adresse,mail,Numero,Mdp')
        ->from('utilisateur')
        ->where('ID_utilisateur', $ID)
        ->get()
       /* echo "<pre>";
    print_r($this->db->last_query());
    echo "</pre>";*/
    ->result();
    }
    public function modifier($ID,$nom, $prenom, $adresse, $mail, $numero, $mdp){
        return $this->db->set('Nom', $nom)
        ->set('Prenom', $prenom)
        ->set('Adresse', $adresse)
        ->set('mail', $mail)
        ->set('Numero', $numero)
        ->set('Mdp', $mdp)
        ->where('ID_utilisateur', $ID)
        ->update('utilisateur');
    }
}  