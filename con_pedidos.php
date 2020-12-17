<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();

$cmd = $con->prepare("SELECT id_entrega, sucursal, num_items, objetos, domi_entrega, num_tel FROM entrega");
$cmd->setFetchMode(PDO::FETCH_ASSOC);
$cmd->execute();
$tabla = $cmd->fetchAll();
echo json_encode($tabla);