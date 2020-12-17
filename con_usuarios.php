<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();

$cmd = $con->prepare("SELECT id_usuario, nombre, apellido_pat, apellido_mat, nombre_usuario, passwd, fecha_nac, domicilio, edad, sexo FROM registrar");
$cmd->setFetchMode(PDO::FETCH_ASSOC);
$cmd->execute();
$tabla = $cmd->fetchAll();
echo json_encode($tabla);