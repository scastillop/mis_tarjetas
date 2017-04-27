<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

  public function index(){


  		$this->load->view('template/header_view');
      $this->load->view('template/menu_view');
      $this->load->view('home/busqueda_view');
      $this->load->view('template/footer_view');

  }

}
