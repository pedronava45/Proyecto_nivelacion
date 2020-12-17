$("#msgLogin").hide();

function login(){
    u = $("#user").val();
    p = document.getElementById("pass").value;
    tu = document.getElementById("tipouser").value;
    console.log(tu);
    $.getJSON("Login.php",{user:u,pass:p}).done(function(datos){
        if(datos.resp == "si"){
            if(tu=="Empleado"){
                location.href="Pedidos.php";
            }else if (tu=="Cliente") {
                location.href="PagPrincipalCli.php";
            }
            
        }else{
            $("#msgLogin").fadeIn(1000);
            $("#msgLogin").html("Verifique los datos");
        }
     });
}