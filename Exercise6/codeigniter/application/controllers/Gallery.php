<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends CI_Controller {
	public function index(){
		$this->load->view('galleryc.php'); 
		$this->load->helper('html');
	}
}