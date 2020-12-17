usuario = [{id_usuario:'',nombre:'', apellido_pat:'', apellido_mat:'', nombre_usuario:'', passwd:'', fecha_nac:'', domicilio:'', edad:'', sexo:''}];

temasId = 1;
idaeliminar = 0;
idaeditar = 0;
$('.toast').toast({delay: 2000});
consulta();



function actualizar(){
    $("#tablaUsuarios").html('');
    for(let i = 0 ; i < usuario.length; i++){
        let fila = "<tr><td style='font-size:75%';>" + usuario[i].id_usuario + "</td><td style='font-size:75%';>" + usuario[i].nombre + "</td>";
        fila+="<td style='font-size:75%';>" + usuario[i].apellido_pat + "</td><td style='font-size:75%';>" + usuario[i].apellido_mat + "</td>";
        fila+="<td style='font-size:75%';>" + usuario[i].nombre_usuario + "</td><td style='font-size:75%';>" + usuario[i].passwd + "</td>";
        fila+="<td style='font-size:75%';>" + usuario[i].fecha_nac + "</td><td style='font-size:75%';>" + usuario[i].domicilio + "</td>";
        fila += "<td style='font-size:75%';>" + usuario[i].edad + "</td><td style='font-size:75%';>" + usuario[i].sexo + "</td>";
        fila = fila + "<td style='font-size:75%';><button onclick='editarUsuario("+ usuario[i].id_usuario +");' class='btn btn-primary' data-toggle='modal' data-target='#modificaUsuario'>";
        fila += "<i class='material-icons align-middle'>edit</i></button></td>";
        fila += "<td style='font-size:75%';><button onclick='eliminaUsuario("+ usuario[i].id_usuario +");' class='btn btn-danger' data-toggle='modal' data-target='#eliminaUsuario'>";
        fila += "<i class='material-icons align-middle'>cancel</i></button></td></tr>";
        $("#tablaUsuarios").append(fila);
    }
}

function editarUsuario(idUser){
    for(let i = 0 ; i < usuario.length; i++){
        if(usuario[i].id_usuario==idUser){
            $("#user").val(usuario[i].nombre);
            $("#apellido_pat").val(usuario[i].apellido_pat);
            $("#apellido_mat").val(usuario[i].apellido_mat);
            $("#nombre_usuario").val(usuario[i].nombre_usuario);
            $("#passwd").val(usuario[i].passwd);
            $("#fecha_nac").val(usuario[i].fecha_nac);
            $("#domicilio").val(usuario[i].domicilio);
            $("#edad").val(usuario[i].edad);
            $("#sexo").val(usuario[i].sexo);
            idaeditar = idUser;
            break;
        }
    }
}

function eliminaUsuario(idUser){
    idaeliminar = idUser;
}

function confirmaEliminar(){
    $.getJSON("del_usuario.php",{id_usuario:idaeliminar}).done(function(datos){
        if(datos.resp == "si"){
            consulta();
        }else{
            $('.toast').toast('show')
        }
    });
}

function guardaCambios(){
    nombre = $("#user").val();
    apellido_pat = $("#apellido_pat").val();
    apellido_mat = $("#apellido_mat").val();
    nombre_usuario = $("#nombre_usuario").val();
    passwd = $("#passwd").val();
    confirmar_passwd = $("#passwd").val();
    fecha_nac = $("#fecha_nac").val();
    domicilio = $("#domicilio").val();
    edad = $("#edad").val();
    sexo = $("#sexo").val();
    correo = $("#correo").val();
    num_tel = $("#numero_tel").val();
    $.getJSON("mod_usuario.php",{id_usuario:idaeditar,n:nombre,ap:apellido_pat,am:apellido_mat,nu:nombre_usuario,p:passwd,cp:confirmar_passwd,fn:fecha_nac,d:domicilio,e:edad,s:sexo,c:correo,nt:num_tel}).done(function(datos){
        if(datos.resp == "si"){
            consulta();
        }else{
            $('.toast').toast('show')
        }
    });
}

function consulta(){
    $.getJSON("con_usuarios.php").done(function(datos){
        usuario = datos;
        actualizar();
    }).fail(function(e){
    });
}