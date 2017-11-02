<?php
class Test_model extends CI_Model{
  private $nimet=array(
    array("en"=>'Ville',"sn"=>'Virtanen'),
    array("en"=>'Maija',"sn"=>'Mäkinen'),
    array("en"=>'Matti',"sn"=>'Korhonen'),
    array("en"=>'Liisa',"sn"=>'Mäkelä')
  );
  public function hae_nimet(){
    return $this->nimet;
  }
}
