<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con=conexion();

$n = $_REQUEST["n"];
$c = $_REQUEST["c"];
$t = $_REQUEST["t"];
$d = $_REQUEST["d"];
$nt = $_REQUEST["nt"];

$cmd=$con->prepare("INSERT INTO entrega(sucursal, num_items, objetos, domi_entrega, num_tel) VALUES(:n, :c, :t, :d, :nt)");
$cmd->bindValue(':n',$n);
$cmd->bindValue(':c',$c);
$cmd->bindValue(':t',$t);
$cmd->bindValue(':d',$d);
$cmd->bindValue(':nt',$nt);

$cmd->execute();


//$id=$con->lastInsertId();
if($cmd->rowCount()>0){
    echo json_encode(["resp"=>"si"]);
}else{
    echo json_encode(["resp"=>"no"]);
}