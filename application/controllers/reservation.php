<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class reservation extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('reservation_model','rm');
        $this->load->model('proposition_model','pm');
        $this->load->library('session');
       
    }
    public function index(){
       
      
        $ID = $this->session->userdata('ID');
        
        $data['ID'] = $ID;
        $data['profil'] = $this->rm->info_Profil($ID);
        $data['tableau'] = $this->rm->Affichertableau($ID);
        $data['propo'] = $this->pm->compter($ID);
        

        $this->load->view('header',$data);
        $this->load->view('reservation',$data);
    
    }  
     public function annuler(){
        $ID = $this->session->userdata('ID');
        $id_post = $this->input->post('id_post');
        $id_reserv = $this->input->post('id_reserv');
        $nombre = $this->input->post('nombre');
        $nbre_place = $this->input->post('nbre_place');
        $retour = $nbre_place + $nombre ;
        $this->rm->averinaPlace($id_post,$retour) ;
        $this->rm->annuler($id_reserv) ;

       redirect(base_url('reservation'));
    
     }
   public function modifier(){
    $id_reserv = $this->input->post('id_reserv');
    $nombre = $this->input->post('nombre');
    $nombreA = $this->input->post('nombreA');
    $id_post = $this->input->post('id_post');
    $nbre_place = $this->input->post('nbre_place');
    $this->rm->ModifierNombre($id_reserv,$nombre) ;
    $numb = $nombreA - $nombre;
    $donc = $nbre_place + ($numb);
    $this->rm->ajouterPlace($id_post,$donc) ;



    redirect(base_url('reservation'));
   }
      
    } 
   
    
