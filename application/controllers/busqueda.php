<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

  public function __construct() {

       parent::__construct();

       //Cargar modelos

       //Cargar librerías

   }
   
  public function index(){

  		$this->load->view('template/header_view');
      $this->load->view('template/menu_view');
      $this->load->view('home/busqueda_view');
      $this->load->view('template/footer_view');

  }

  //Funcion para retornar el resultado con las tarjetas convenientes
  public function resultado(){

  		$this->load->view('template/header_view');
      $this->load->view('template/menu_view');
      $this->load->view('home/resultado_view');
      $this->load->view('template/footer_view');

  }

}
