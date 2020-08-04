<?php

namespace Controllers;

use \Core\Controller;
use \Models\Users;
use \Models\Membros;

class MembrosController extends Controller {

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
			'menuActive' => 'membros'
		);
	}

	public function index() {
		$membros = new Membros();

		$this->arrayInfo['list'] = $membros->getList();
		$this->loadTemplate('membros', $this->arrayInfo);
	}

	public function add() {
		$this->loadTemplate("membros_add", $this->arrayInfo);
	}

	public function add_action() {
		$igreja_local = $_POST['igreja_local'];
		$nome = $_POST['nome'];
		$dt_nasc = $_POST['dt_nasc'];
		$naturalidade = $_POST['naturalidade'];
		$est_civil = $_POST['est_civil'];
		$nome_conjuge = $_POST['nome_conjuge'];
		$pai = $_POST['pai'];
		$mae = $_POST['mae'];
		$escolaridade = $_POST['escolaridade'];
		$curso = $_POST['curso'];
		$profissao = $_POST['profissao'];
		$rg = $_POST['rg'];
		$cpf = $_POST['cpf'];
		$logradouro = $_POST['logradouro'];
		$numero = $_POST['numero'];
		$complemento = $_POST['complemento'];
		$bairro = $_POST['bairro'];
		$cidade= $_POST['cidade'];
		$uf = $_POST['uf'];
		$cep = $_POST['cep'];
		$tel = $_POST['tel'];
		$pt_religiao = $_POST['pt_religiao'];
		$desc_religiao = $_POST['desc_religiao'];
		$batismo = $_POST['batismo'];
		$igreja_batismo = $_POST['igreja_batismo'];
		$batismo_esp = $_POST['batismo_esp'];
		$batismo_esp_quando = $_POST['batismo_esp_quando'];
		$nesta_igreja = $_POST['nesta_igreja'];
		$qd_nesta_igreja = $_POST['qd_nesta_igreja'];
		$situacao = $_POST['situacao'];
		$obs = $_POST['obs'];
		
		$membros = new Membros();
		$membros->add($igreja_local,$nome,$dt_nasc,$naturalidade,$est_civil,$nome_conjuge,$pai,$mae,$escolaridade,$curso,$profissao,$rg,$cpf,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$cep,$tel,$pt_religiao,$desc_religiao,$batismo,$igreja_batismo,$batismo_esp,$batismo_esp_quando,$nesta_igreja,$qd_nesta_igreja,$situacao,$obs);

		header("Location:".BASE_URL."membros");
		exit;
		
	}

	public function edit($id){
		$membros = new Membros();

		$this->arrayInfo['info'] = $membros->getinfo($id);
		$this->loadTemplate("membros_edit", $this->arrayInfo);
	}

}