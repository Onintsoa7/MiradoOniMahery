<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH . 'controllers\sessioncontroller.php');

class miradoci extends sessioncontroller{

	public function insertion_profil(){
		$poids = $_POST['poids'];
		$long = $_POST['longueur'];
		$genre = $_POST['idgenre'];
		if ($poids < 0 || $long < 0 || $genre > 2) {
			return null;
		}
		$this-> load-> model('mirado');
		var_dump($_SESSION);
		$users = $this->mirado->max_id_profil_utilisateur($_SESSION['utilisateur']['detail']['id']);
		if (count($users) == 0) {
			$this->mirado->insert_profil($_SESSION['utilisateur']['detail']['id'],$poids,$long,$genre);
		}else{
			$this->mirado->update_max_id_profil($_SESSION['utilisateur']['detail']['id']);
			$this->mirado->insert_profil($_SESSION['utilisateur']['detail']['id'],$poids,$long,$genre);
		}
		redirect('welcome');
	}

	public function redirect_monnaie(){
		$this->load->model('mirado');
		$data['content'] = 'pagefront/monnaie';
		$data['code'] = $this->mirado->code();
		$data['monnaie'] = $this->mirado->montant_portemonnaie($_SESSION['utilisateur']['detail']['id']);
		$this->load->view('templatefront',$data);
	}
	

	public function update_code(){
		$this->load->model('mirado');
		$data['content'] = 'pagefront/monnaie';
		$data['code'] = $this->mirado->verification_disponibilite_code($_GET['idcode']);
		$data['message'] = '';
		if ($data['code'][0]['etat'] == 1) {
			$this->mirado->update_code($_GET['idcode'],$_SESSION['utilisateur']['detail']['id']);
			$data['message'] = 'demande en cours';
		}
		elseif ($data['code'][0]['etat'] >= 5)
		{
			$data['message'] = "code deja utiliser";
		}
		$data['monnaie'] = $this->mirado->montant_portemonnaie($_SESSION['utilisateur']['detail']['id']);
		$data['content'] = 'pagefront/monnaie';
		$data['code'] = $this->mirado->code();
		$this->load->view('templatefront',$data);
	}
	
	public function insert_objectif_client(){
		$idobj = $_GET['poids'];
		$qtt = $_GET['pese'];
		
		$this->load->model('mirado');
		$this->mirado->insert_objectif_client($idobj,$_SESSION['utilisateur']['detail']['id'],$qtt);
		redirect('Welcome');
	}
	public function redirect_activite(){
        $data = array();
        $data['content'] = 'pagefront/suggestion';  
		$this->load->model('mirado');
		$data['message'] = '';
		$data['objectif'] = $this->mirado->redirect_objectif($_SESSION['utilisateur']['detail']['id']);
		if($data['objectif'] != null){
			if ($data['objectif'][0]['idobjectif'] == 2) {
				$data['message'] = "Augmentation de poids";
			}elseif ($data['objectif'][0]['idobjectif'] == 1) {
				$data['message'] = "Diminution de poids";
			}
			$data['regime'] = $this->mirado->prix_par_regime($data['objectif'][0]['idobjectif']);
			$data['monnaie'] = $this->mirado->montant_portemonnaie($_SESSION['utilisateur']['detail']['id']);
			// $data['regime'] = $this->mirado->liste_regime($data['objectif'][0]['idobjectif']);
			$this->load->view('templatefront', $data);
		}else{
			redirect('welcome');
		}
    }

	public function redirect_export(){
        $data = array();
        $data['content'] = 'pagefront/export';  
		$this->load->model('mirado');
		$data['sport'] = $this->mirado->liste_sport($_GET['objectif']);
		$data['repas'] = $this->mirado->liste_repas($_GET['objectif']);
		$data['montant'] = $_GET['montant'];
		$data['monnaie'] = $this->mirado->montant_portemonnaie($_SESSION['utilisateur']['detail']['id']);
		$data['information'] = $this->mirado->information($_SESSION['utilisateur']['detail']['id']);
        $this->load->view('templatefront', $data);
	}

	public function suivre(){
		$this->load->model('mirado');
		$f = $this->mirado->comparaison($_SESSION['utilisateur']['detail']['id'], $_GET['montant']);
		if($f == true){
			redirect('welcome');
		}
		redirect('welcome?error=1');
	}
}
