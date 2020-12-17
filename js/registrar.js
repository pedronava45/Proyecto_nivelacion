$("#msgLogin").hide();
function registrar(){
    //u = document.getElementById("user").value;
    nombre = $("#user").val();
    apellido_pat = document.getElementById("apellido_pat").value;
    apellido_mat = document.getElementById("apellido_mat").value;
    nombre_usuario = document.getElementById("nombre_usuario").value;
    passwd = document.getElementById("passwd").value;
    confirmar_passwd = document.getElementById("confirma_passwd").value;
    fecha_nac = document.getElementById("fecha_nac").value;
    domicilio = document.getElementById("domicilio").value;
    edad = document.getElementById("edad").value;
    sexo = document.getElementById("sexo").value;
    if (passwd == confirmar_passwd && nombre != "" && apellido_pat != "" && apellido_mat != "" && nombre_usuario != "" && passwd != "" && confirmar_passwd != "" && fecha_nac != "" && domicilio != "" && edad != "" && sexo != "") {
        $.get("registro.php",{n:nombre,ap:apellido_pat,am:apellido_mat,nu:nombre_usuario,p:passwd,cp:confirmar_passwd,fn:fecha_nac,d:domicilio,e:edad,s:sexo}).done(function(datos){
             if(datos.resp == "si"){
                 console.log("Registrado");
             }else{
             }
          });
    }else{
        $("#msgLogin").fadeIn(1000);
        $("#msgLogin").html("Error al ingresar los datos, verifica que sean datos validos");
    }

}