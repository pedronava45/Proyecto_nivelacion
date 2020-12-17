<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();
$id = $_REQUEST["id_usuario"];
$cmd = $con->prepare("DELETE FROM registrar WHERE id_usuario=:id_usuario");
$cmd->bindValue(':id_usuario',$id);
$cmd->execute();

if($cmd->rowCount() > 0)
    echo json_encode(["resp"=>"si"]);
else
    echo json_encode(["resp"=>"no"]);