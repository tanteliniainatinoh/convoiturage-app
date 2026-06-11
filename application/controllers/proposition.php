<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class proposition extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('proposition_model','pm');
        $this->load->library('session');
       
    }
    public function index(){
       
      
        $ID = $this->session->userdata('ID');
        $data['profil'] = $this->pm->info_Profil($ID);
        $data['tableau'] = $this->pm->Affichertableau();
        $data['propo'] = $this->pm->compter($ID);
      
        
        $this->load->view('header',$data);
        $this->load->view('proposition',$data);
    }   
    public function ajouter() {
        $ID = $this->session->userdata('ID');
        $depart = $this->input->post('depart');
        $destination = $this->input->post('destination');
        $date = $this->input->post('date');
		$heure = $this->input->post('heure');
		$nbre_place = $this->input->post('nbre_place');
        $this->pm->ajouter($ID,$depart, $destination, $date, $heure, $nbre_place) ;
       redirect(base_url('proposition'));
    }


    public function reserver() {
        $ID = $this->session->userdata('ID');
        $id_post = $this->input->post('id_post');
        $nombre = $this->input->post('nombre');
        $nbre_place = $this->input->post('nbre_place');
        $this->pm->reserverData($ID,$id_post, $nombre) ;
        $reste = $nbre_place - $nombre;
        $this->pm->reduireNombre($id_post,$reste) ;
       redirect(base_url('proposition'));
       
    }
  
      
    } 
   
    
