<?php
defined('BASEPATH') or exit('No direct script access allowed');

//class oni extends sessioncontroller {
class onicontroller extends CI_Controller
{

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
		$this->load->view('pageback/login');
	}

	public function accueil()
	{
		$data = array();
		$data['content'] = 'pageback/accueil';  //nom de la vue de redirection
		$this->load->view('templateback', $data);
	}

	public function utilisateur()
	{
		$data = array();
		$this->load->model('oni');
		$data['utilisateurs'] = $this->oni->utilisateurs(0);
		$data['content'] = 'pageback/utilisateur';  //nom de la vue de redirection
		$this->load->view('templateback', $data);
	}
	public function code()
	{
		$data = array();
		$this->load->model('oni');
		$data['code'] = $this->oni->getcode(0);
		$data['code1'] = $this->oni->getcode(1);
		$data['code11'] = $this->oni->getcode(11);
		$data['content'] = 'pageback/code';  //nom de la vue de redirection
		$this->load->view('templateback', $data);
	}
	public function regime()
	{
		$data = array();
		$this->load->model('oni');
		$data['regime'] = $this->oni->getregime(0);
		$data['content'] = 'pageback/regime';  //nom de la vue de redirection
		$this->load->view('templateback', $data);
	}
	public function regime_alimentaire()
	{
		$data = array();
		$this->load->model('oni');
		$data['regime'] = $this->oni->getregime(0);
		$data['getregime_alimentaire'] = $this->oni->getregime_alimentaire(0);
		$data['sum_regime'] = array();

		for ($i = 0; $i < count($data['getregime_alimentaire']); $i++) {
			$sum_regime = $this->oni->get_sum_regime($data['getregime_alimentaire'][$i]['id']);
			$data['sum_regime'][] = $sum_regime;
		}

		$data['regime_alimentaire_relation'] = $this->oni->getregime_alimentaire_relation(0);
		$data['content'] = 'pageback/regime_alimentaire';  //nom de la vue de redirection
		$this->load->view('templateback', $data);
	}

	public function sport()
	{
		$data = array();
		$this->load->model('oni');
		$data['sport'] = $this->oni->getsport(0);
		$data['content'] = 'pageback/sport';  //nom de la vue de redirection
		$this->load->view('templateback', $data);
	}
	public function supprimerregime()
	{
	}

	public function deconnexion()
	{
		$this->session->sess_destroy();
		$this->index();
	}

	public function verify_login()
	{
		$name = $_POST['nom'];
		$pass = $_POST['mdp'];
		$this->load->model('oni');
		$check = $this->oni->verifier_login($name, $pass);

		if ($check === FALSE) {
			redirect('Welcome/loginadministrateur');
		} else {
			$array = array();
			$array['detail'] = $check;
			$this->session->userdata('administrateur');
			var_dump($_SESSION);
			$this->session->set_userdata('administrateur', $array);
			var_dump($_SESSION);
			return redirect('onicontroller/accueil');
		}
	}
	public function codevalidation()
	{
		$idcode = $_GET['idcode'];
		$idutilisateur = $_GET['idutilisateur'];
		$montant = $_GET['montant'];
		$this->load->model('oni');
		$this->oni->augmenter_monnaie($idutilisateur, $montant, $idcode);
		redirect(site_url('onicontroller/code'));
	}

	public function insertion_regime()
	{
		$nom = $_POST['nom'];
		$poidsvariation = $_POST['poidsvariation'];
		$montant = $_POST['montant'];
		$objectif = $_POST['objectif'];
		$this->load->model('oni');
		echo floatval($poidsvariation) . "hooooo";
		$this->oni->insertion_regime($nom, floatval($poidsvariation), floatval($montant), $objectif);
		redirect(site_url('onicontroller/regime'));
	}

	public function insertion_sport()
	{
		$nom = $_POST['nom'];
		$poidsvariation = $_POST['poidsvariation'];
		$objectif = $_POST['objectif'];
		$this->load->model('oni');
		$this->oni->insertion_sport($nom, floatval($poidsvariation), $objectif);
		redirect(site_url('onicontroller/sport'));
	}

	public function insertion_regime_alimentaire()
	{
		$duree = $_POST['duree'];
		$nom = $_POST['nom'];
		// Retrieve the selected checkbox values
		$selectedRegimes = $_POST["regime"];
		$this->load->model('oni');
		$this->oni->insertion_regime_alimentaire($nom, $duree, $selectedRegimes);
		redirect(site_url('onicontroller/regime_alimentaire'));
	}
	public function modifiersport()
	{
		$data = array();
		$idsport = $_GET['idsport'];
		$this->load->model('oni');
		$data['sport'] = $this->oni->getsport($idsport);
		$data['content'] = 'pageback/modifiersport';  //nom de la vue de redirection
		$this->load->view('templateback', $data);
	}
	public function modifierregime()
	{
		$data = array();
		$idregime = $_GET['idregime'];
		$this->load->model('oni');
		$data['regime'] = $this->oni->getregime($idregime);
		$data['content'] = 'pageback/modifierregime';  //nom de la vue de redirection
		$this->load->view('templateback', $data);
	}


	public function updateregime()
	{
		$nom = $_POST['nom'];
		$poidsvariation = $_POST['poidsvariation'];
		$montant = $_POST['prix'];
		$objectif = $_POST['objectif'];
		$id = $_POST['id'];
		$this->load->model('oni');
		$this->oni->update_regime($nom, $poidsvariation, $montant, $objectif, $id);
		redirect(site_url('onicontroller/regime'));
	}
	public function modifierregimealimentairerelation()
	{
		$data = array();
		$idregimealimentaire = $_GET['idregimealimentairerelation'];
		$this->load->model('oni');
		$data['regime'] = $this->oni->getregime(0);
		$data['regimealimentaire'] = $this->oni->getregime_alimentaire_relation($idregimealimentaire);
		$data['selected_regimes'] = array(); // Initialize the selected_regimes array

		for ($i = 0; $i < count($data['regimealimentaire']); $i++) {
			$data['selected_regimes'][] = $data['regimealimentaire'][$i]['idr']; // Store the selected regime IDs
		}

		$data['content'] = 'pageback/modifierregimealimentaire';  //nom de la vue de redirection
		$this->load->view('templateback', $data);
	}
	public function updateregimealimentaire()
	{

		$duree = $_POST['duree'];
		// Retrieve the selected checkbox values
		$selectedRegimes = $_POST['regime'];
		$nom = $_POST['nom'];
		$id = $_POST['id'];
		$this->load->model('oni');
		$this->oni->update_regime_alimentaire($id, $nom, $duree, $selectedRegimes);
		redirect(site_url('onicontroller/regime_alimentaire'));
	}
}
