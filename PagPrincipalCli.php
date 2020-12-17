<?php
require_once 'seguridad.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/iconfont/material-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Delivery Service</title>
</head>
<style>
    body {
        background-image: url(img/fondo1.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    footer {
        position: static;
    }

    .abs-center {
        display: flex;
        align-items: center;
        justify-content: left;
        min-height: 80vh;
    }

    .form {
        width: 350px;
    }

    #letra {
        font-style: normal;
        font-weight: 20;
        font-size: 45px;
    }

    .imp {

        width: 250px;
        height: 150px;
        margin: 10px;

    }
</style>

<body>
    <nav class="navbar navbar-light" style="background-color: #f0b840;">        <a class="navbar-brand" href="#">
        <a class="navbar-brand" href="#">
            <img src="img/Logo.jpg" width="30" height="30">
           Delivery Nava
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item active">
                    <a class="nav-link" href="PedidosCli.php"> Mis pedidos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.html"> Salir <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <div class="center">
            <div class="col"></div>
            <div class="col">
                <div class="card mt-5">
                </div>
                           
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">done</i>
                                </div>
                            </div>
                            <input type="text" name="user" id="nombresucursal" class="form-control"
                                placeholder="Sucursal donde se realizara el pedido">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">done</i>
                                </div>
                            </div>
                            <input type="text" name="Nombre_usuario" id="num_items" class="form-control"
                                placeholder="Numero de objetos">
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">done</i>
                                </div>
                            </div>
                            <input type="text" name="objetos" id="objetos" class="form-control"
                                placeholder="Nombre de los objetos">
                        </div>
                       
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">room</i>
                                </div>
                            </div>
                            <input type="text" name="Domicilio" id="domicilio" class="form-control"
                                placeholder="Domicilio">
                        </div>
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons align-middle">smartphone</i>
                                </div>
                            </div>
                            <input type="text" name="Numero_tel" id="numero_tel" class="form-control"
                                placeholder="Numero Telefonico">
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button"  onclick="agregarCompra()" class="btn btn-primary"
                            data-dismiss="modal">Guardar</button>
                            
                    </div>
                    </div>

     </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
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
    <script src="js/validacion.js"></script>
    <script src="js/Chart.js"></script>
    <script src="js/miOrden.js"></script>
    <script src=></script>

</body>

</html>