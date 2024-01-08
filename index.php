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

/*Carrega um usuário usando login e senha
$usuario = new Usuario();

$usuario->login("root", "!@#$%");

echo $usuario;
*/

/*Inserindo aluno
$aluno = new Usuario("Graça", "111057");

$aluno->insert();

echo $aluno;
*/


/*Alterar usuario
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("Graca", "111057");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>