<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();
$id = $_REQUEST["id_entrega"];
$cmd = $con->prepare("DELETE FROM entrega WHERE id_entrega=:id_entrega");
$cmd->bindValue(':id_entrega',$id);
$cmd->execute();

if($cmd->rowCount() > 0)
    echo json_encode(["resp"=>"si"]);
else
    echo json_encode(["resp"=>"no"]);