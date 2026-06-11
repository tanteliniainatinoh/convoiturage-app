<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class publication extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('publication_model','pm');
        $this->load->model('proposition_model','mm');
        $this->load->library('session');
       
    }
    public function index(){
       
      
        $ID = $this->session->userdata('ID');
        $data['profil'] = $this->pm->info_Profil($ID);
        $data['tableauA'] = $this->pm->AffichertableauPro($ID);
       $data['tableauB'] = $this->pm->AffichertableauDem($ID);
       $data['propo'] = $this->mm->compter($ID);
       
        $this->load->view('header',$data);
        $this->load->view('publication',$data);
    }   
    public function supprimerPro() {
        $ID = $this->session->userdata('ID');
        $id_post = $this->input->post('id_post');
        $this->pm->supprimerPro($ID,$id_post);
        $this->pm->supprimerReservation($id_post);
        redirect(base_url('publication'));
    }
    public function supprimerDem() {
        $ID = $this->session->userdata('ID');
        $id_dem = $this->input->post('id_dem');
        $this->pm->supprimerDem($ID,$id_dem);
        redirect(base_url('publication'));
    }
   
    
  
      
    } 
   
    
