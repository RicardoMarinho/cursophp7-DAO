<?php

/**
 * @author Ricardo Braz
 * @copyright 2019
 */

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

?>