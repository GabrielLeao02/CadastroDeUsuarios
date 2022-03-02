<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cadastro', 'cadastro');
		//$this->default = $this->load->database('default, TRUE');*/
	}

	public function index()
	{

		$data['teste'] = $this->cadastro->teste();
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
		$this->load->view('welcome_message');
	}

	public function cadastrar()
	{

		$nome = $_POST['nome_Usuario'];
		$email = $_POST['email_Usuario'];
		$telefone = $_POST['telefone_Usuario'];
		$senha = $_POST['senha_Usuario'];
		$strcon = mysqli_connect('localhost', 'root', '', 'usuarios_chat') or die('Erro ao conectar ao banco de dados');
		$sql = "INSERT INTO usuarios_ VALUES ";
		$sql .= "('$nome', '$email','$telefone','$senha')";
		mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
		mysqli_close($strcon);
		echo "Cliente cadastrado com sucesso!";
		echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
		echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
		$data['teste'] = $this->cadastro->teste();
		$this->load->view('tabela', $data);
	}
}
