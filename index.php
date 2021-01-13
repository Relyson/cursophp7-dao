<?php 

require_once("config.php");

//Carrega um usuário
//$user = new Usuario();
//$user->loadbyId(3);
//echo $user;

//Carregar uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista); 

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("A");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user", "12345");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadbyId(9);
//$usuario->update("professor", "!@#$%¨&*");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadbyId(6);
$usuario->delete();

echo $usuario;


/************************************
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

?>