<?php 
	
	require_once("config.php");

	//Carrega um usuário
	//$root = new Usuario();
	//$root->loadById(2);
	//echo $root;

	//Carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuário buscando pelo login
	//$search = Usuario::search("aa");
	//echo json_encode($search);

	//Carrega um usuário usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("user","123456"); 
	//echo $usuario;

	//Inserido Registro no Banco de dados
	//$aluno = new Usuario("aluno2", "@A560");
	//$aluno->insert();
	//echo $aluno;

	//Atualizando um registro no banco
	//$usuario = new Usuario();
	//$usuario->loadById(2);
	//$usuario->update("professor", "aras15!");
	//echo $usuario;

	//Deletando um registro

	$usuario = new Usuario();

	$usuario->loadById(3);

	$usuario->delete();

	echo $usuario;

 ?>