<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
    private $ID;
    public function __construct() {
        parent::__construct();
        $this->load->model('Profil_Model', 'Pm');
        $this->load->model('proposition_model','pm');
        $this->load->library('session');
    }

    public function index() {
        $ID = $this->session->userdata('ID');
        $data = array();
        $data['utilisateur'] = $this->Pm->info_Profil($ID);
        $data['propo'] = $this->pm->compter($ID);
      
        $this->load->view('Profil', $data);
        $this->load->view('header', $data);
       
    }
   public function modifier() {
    $ID = $this->input->post('ID');
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
		$adresse = $this->input->post('adresse');
		$mail = $this->input->post('mail');
		$numero = $this->input->post('numero');
		$mdp = $this->input->post('mdp');
        $this->Pm->modifier($ID, $nom, $prenom, $adresse, $mail, $numero, $mdp) ;
       redirect(base_url('Profil/index/'.$ID));
       
        }
        }
       
    

 




?>