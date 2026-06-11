<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class loginModel extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function ajoutUtilisateur($nom, $prenom, $adresse, $mail, $numero, $mdp){
        return $this->db->set('Nom', $nom)
                ->set('Prenom', $prenom)
                ->set('Adresse', $adresse)
                ->set('mail', $mail)
                ->set('Numero', $numero)
                ->set('Mdp', $mdp)
                ->insert('utilisateur');
    }
}  