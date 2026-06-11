<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class header extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('proposition_model','pm');
        $this->load->library('session');
       
    }
    public function index(){
        $ID = $this->session->userdata('ID');
        $data['propo'] = $this->pm->compter($ID);
        $this->load->view('header',$data);
    }   
    public function ajouter() {
        $ID = $this->session->userdata('ID');
     
    }


   
  
      
    } 
   
    
