<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH . 'controllers\sessioncontroller.php');

class mahery extends sessioncontroller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
        $data['content'] = 'pagefront/export';  //nom de la vue de redirection
        $this->load->view('templatefront', $data);
	}		
}
