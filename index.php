<?php

require_once("config.php");

$lista = array(":ID"=>4);

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",$lista);

echo json_encode($usuarios);

?>