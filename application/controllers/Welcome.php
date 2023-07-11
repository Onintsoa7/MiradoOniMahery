<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function loginadministrateur()
	{
		$this->load->view('pageback/login');
	}	
	

	public function index()
	{

		$data = array();
        $data['content'] = 'pagefront/accueil';  //nom de la vue de redirection
		if ($this->session->has_userdata('utilisateur') == true) {
			$data['content'] = 'pagefront/accueil';
		}
		
		$this->load->model('mirado');
		$data['regime'] = $this->mirado->all_supposition();
		$data['objectif'] = $this->mirado->objectif();
        $this->load->view('templatefront', $data);
		
	}	
	
	public function redirect_login(){
		$this->load->view('loginfront');
	} 
	public function verify_login()
	{
		$name = $_POST['nom'];
		$pass = $_POST['mdp'];
		$this->load->model('mirado');
		$check = $this->mirado->verifier_login($name,$pass);

		if ($check === FALSE) {
			return FALSE;
		}else{
			if ($this->session->userdata('utilisateur')) {
				$this->session->unset_userdata('utilisateur');
			}
			$array = array();
			$array['detail'] = $check;
			$this->session->userdata('utilisateur');
			// var_dump($_SESSION);
			$this->session->set_userdata('utilisateur',$array);
			// var_dump($_SESSION);
			return TRUE;
		}
	}

	public function login(){
		if ($this->verify_login() === FALSE) {
			$this->load->view('loginfront');
			
		}else {
			redirect('Welcome');
		}
	}

	public function inscription(){
		$nom = $_POST['nom'];
		$contact = $_POST['contact'];
		$mail = $_POST['mail'];
		$pass = $_POST['pass'];
		$this->load->model('mirado');
		$this->mirado->insert_utilisateur($nom,$contact,$mail,$pass);
		if ($this->session->userdata('utilisateur')) {
			$this->session->unset_userdata('utilisateur');
		}
		$data = array();
		$data['detail'] = $this->mirado->verifier_login($nom,$pass);
		$this->session->userdata('utilisateur');
		$this->session->set_userdata('utilisateur',$data);
		$this->mirado->insert_wallet($_SESSION['utilisateur']['detail']['id'],0);
		redirect('Welcome');
	}

	public function deconnexion(){
		$this->session->unset_userdata('utilisateur');
		$this->index();
	}

		// $this->load->view('pagefront/');
		$data = array();
        $data['content'] = 'pagefront/index';  //nom de la vue de redirection
		$data['connect'] = 1;
		$data['developpeur'] = null;
        $this->load->view('templatefront', $data);
	}		

}
