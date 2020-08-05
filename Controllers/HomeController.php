<?php

namespace Controllers;

use \Core\Controller;
use \Models\Users;
use \Models\Home;

class HomeController extends Controller {

	private $user;
	private $arrayInfo;

	public function __construct() {
		$this->user = new Users();

		if(!$this->user->isLogged()) {
			header("Location: ".BASE_URL."login");
			exit;
		}

		$this->arrayInfo = array(
			'user' => $this->user,
			'menuActive' => 'home'
		);
	}

	public function index() {
		$home = new Home();

		$this->arrayInfo['quant_membros'] = $home->getQuantOfMembros();
		$this->arrayInfo['quant_membros_ina'] = $home->getQuantOfMembrosIna();
		$this->arrayInfo['quant_membros_ati'] = $home->getQuantOfMembrosAti();
		$this->loadTemplate('home', $this->arrayInfo);
	}

}