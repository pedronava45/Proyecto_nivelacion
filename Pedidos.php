<?php
require_once 'seguridad.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Orden</title>
    <link rel="stylesheet" href="css/iconfont/material-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    footer {
        
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;
    } 
table{
position:relative;
margin:auto;
width:100%;
right:5%;

}
table thead tr th{
padding:10x;
}
table body tr td{
padding:10px;
}    
</style>

<body>
    <!-- El nav o barra de navegacion -->
    <nav class="navbar navbar-light" style="background-color: #f0b840;">
        <a class="navbar-brand" href="#">
            <img src="img/Logo.jpg" width="30" height="30">
            Delivery Nava GESTION
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
    
                <li class="nav-item active">
                    <a class="nav-link" href="usuario.php"> Usuarios <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="index.html"> Salir <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
        <div class="container mt-5" >
            <div style="text-align:center; ">
            <div class="row">
                <div class="col">
                <table class="table table-hover table-ligth" style="background-color:#977324f3;" >
                        <thead>
                            <tr> 
                                <th>ID</th>
                                <th>Sucursal</th>
                                <th>Numero de objetos</th>
                                <th>Especificaciones</th>
                                <th>Entrega-Domicilio</th>
                                <th>Numero Telefono</th>
                                <th style="width:200px"; "height:200px">Finalizacion</th>
                            </tr>
                        </thead>
                        <tbody id="tablaPedidos">
                            <tr>
                               
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>
        
        <!-- Es una ventana modal para eliminar -->
        <div class="modal fade" id="eliminaPedido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Entrega Exitosa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>¿La entrega se ha realizado con exito?</p>
                        <p>Si es asi puede eliminar el pedido</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" onclick="confirmaEliminar()" class="btn btn-primary"
                            data-dismiss="modal">Si</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container-fluid">
        <div class="navbar navbar-light" style="background-color: #ffd57a;">
            <div class="col">
                <p class="text-center">Copyright Delivery Nava(c) 2020. Todos los derechos reservados. </p>
                <p class="text-center"><a href="mailto:PedroNava@gmail.com">Contacto</a></p>
            </div>
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/miOrden.js"></script>
</body>

</html>