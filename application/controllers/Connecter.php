<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Connecter extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Connecter_model','Cm');
        $this->load->library('session');
       
    }
    public function index(){ 
       
        $this->load->view('Connecter');
       
    } 
    public function authentification(){
       
        $ID= $this->input->post('ID');
        $mdp= $this->input->post('mdp');
        $this->session->set_userdata('ID', $ID) ;
        if($this->Cm->authentif($ID,$mdp)){
          redirect('Profil/index/');
        }
        else{
            redirect(base_url('Connecter/?error=false'));
        }
      

    }  
  
      
}
   
    
