<?php
session_start();
require_once 'conexion.php';
$_SESSION["login"] = "no";
$_SESSION["nombre"] = "";

$u = $_GET['user'];
$p = $_GET['pass'];

$con = conexion();

$comando = $con->prepare("SELECT * FROM acceso WHERE username=:u AND passwd=:p");
$comando->bindValue(':u', $u);
$comando->bindValue(':p', $p);

$comando->execute();
$consulta = $comando->fetch();

if($consulta){
    $_SESSION["login"] = "si";
    $_SESSION["username"] = $consulta["username"];
    $_SESSION["passwd"] = $consulta["passwd"];
    echo json_encode(["resp"=>"si"]);
}else{
    echo json_encode(["resp"=>"no ni vergas"]);
}
?>