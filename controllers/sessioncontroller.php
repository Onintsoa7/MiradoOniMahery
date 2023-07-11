<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sessioncontroller extends CI_Controller {

	function __construct()
    {
        parent::__construct();  
        if(!$this->session->has_userdata('utilisateur'))
             {
                redirect(site_url('Welcome'));
        }
    }	
}
