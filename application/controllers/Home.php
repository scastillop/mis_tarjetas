<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {

       parent::__construct();

       //Cargar modelos

       //Cargar librerías

   }


	public function index()
	{

		$this->load->view('template/header_view');
    $this->load->view('template/menu_view');
    $this->load->view('home/home_view');
    $this->load->view('template/footer_view');
	}

}

/*antiguo .htaccess
RewriteEngine on
RewriteCond $1 !^(index\.php|images|php|script|styles|js|css)
RewriteRule ^(.*)$ /mistarjetas/index.php/$1 [L]


*/
