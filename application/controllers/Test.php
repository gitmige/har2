<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
  public function index(){
    echo 'Tämä on Test Controllerin index-metodi';
  }

  public function toinen(){
    echo 'Tämä on Test Controllerin toinen metodi';
  }
  public function kolmas(){
    $data['Etunimi']='Ville';
    $data['Sukunimi']='Virtanen';
    $data['sivu']='test/kolmas';
    $this->load->view('menu/content',$data);
  }
  public function neljas(){
    $this->load->model('Test_model');
    $data['oppilaat']=$this->Test_model->hae_nimet();
    $data['sivu']='test/neljas';
    $this->load->view('menu/content',$data);
  }
}
 ?>
