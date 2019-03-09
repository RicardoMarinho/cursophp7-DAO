<?php

/**
 * @author Ricardo Braz
 * @copyright 2019
 */

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
/*Carrega um usuario
$root = new Usuario();

$root->loadbyId(4);

echo $root;

*/
/*Carrega uma lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);
*/

/*Carrega uma lista com um search

$search = Usuario::search("jo");
echo json_encode($search);

*/

/*Carrega usuario usando login e senha

$usuario = new Usuario();
$usuario->login("jose", "asdadas");
echo $usuario;

*/

$aluno = new Usuario("mario", "m@ri0");
$aluno->insert();

echo $aluno;
?>