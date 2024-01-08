<?php

require_once("config.php");

/*Traz apenas um usuário
$root = new Usuario();

$root->loadById(3);

echo $root;
*/

/*Retorna lista com todos os usuários
$lista=Usuario::getList();

echo json_encode($lista);
*/

/*Carrega uma lista de usuários buscando pelo login
$search=Usuario::search("ro");

echo json_encode($search);

*/

$usuario = new Usuario();

$usuario->login("root", "!@#$%");

echo $usuario;

?>