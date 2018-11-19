<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class idioma extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('bienbenido');
    }
    



    public function es()
    {

        
        $this->load->view('bienbenido');
    }
    




    public function en()
    {
        $this->load->view('bienbenido');
    }
}
