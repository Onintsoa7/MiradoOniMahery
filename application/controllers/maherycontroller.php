<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maherycontroller extends CI_Controller {

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
        $data['content'] = 'pagefront/accueil';  //nom de la vue de redirection
        $this->load->view('templatefront', $data);
	}		

	public function composition()
	{
		$data = array();
		$data['content'] = 'pageback/composition_regime';  //nom de la vue de redirection
		$this->load->model('mahery');

		$id_regime = $_GET['idregime'];
		$compo_regime = $this->mahery->avoir_composition_regime($id_regime);
		// var_dump($compo_regime);

		$qte = array();
		$compo_nom = array();

		foreach ($compo_regime as $cpr) {
			// echo $cpr->idcomposition;
			// echo $this->mahery->avoir_nom_composition($cpr->idcomposition);
			$qte[] = $this->mahery->avoir_pourcentage($cpr->idcomposition ,$cpr->idregime);	
			$compo_nom[] = $this->mahery->avoir_nom_composition($cpr->idcomposition);
		}

		// var_dump($qte);
		// var_dump($compo_nom);
			
		$data['compo_nom'] = $compo_nom;
		$data['quantite'] = $qte;
		$data['nom'] = $_GET['nom_regime'];

		$this->load->view('templateback', $data);

	}
}
