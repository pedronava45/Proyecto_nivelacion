orden = [{id_entrega:'1',sucursal:'Aurrera',num_items:'3',objetos:'Salsa,chetos,bbq',domi_entrega:'cedro 28', num_tel:'4454545'}];
idaeliminar = 0;
consulta();
function actualizar(){
    $("#tablaPedidos").html('');
    for(let i = 0 ; i < orden.length; i++){
        let fila = "<tr><td >" + orden[i].id_entrega + "</td>";
        fila+="<td>" + orden[i].sucursal + "</td><td>" + orden[i].num_items + "</td>";
        fila+="<td>" + orden[i].objetos + "</td><td>" + orden[i].domi_entrega +"</td>";
        fila+="<td>" + orden[i].num_tel + "</td>";
        fila += "<td style='font-size:50%';><button class='btn btn-danger btn-sm' onclick='eliminaOrden("+ orden[i].id_entrega +");' data-toggle='modal' data-target='#eliminaPedido'>";
        fila += "<i class='material-icons align-middle'>cancel</i></button></td></tr>";
        $("#tablaPedidos").append(fila);
    }
}

function agregarCompra() {
    nombre = $("#nombresucursal").val();
    num_items = document.getElementById("num_items").value;
    objetos = document.getElementById("objetos").value;
    domicilio = document.getElementById("domicilio").value;
    num_tel = document.getElementById("numero_tel").value;
    if (nombre != "" && num_items != "" && objetos != "" && domicilio != "" && num_tel != "") {
        $.get("add_orden.php",{n:nombre,c:num_items,t:objetos,d:domicilio,nt:num_tel}).done(function(datos){
             if(datos.resp == "si"){
             }else{
             }
          });
    }else{
        $("#msgLogin").fadeIn(1000);
        $("#msgLogin").html("Error al ingresar los datos");
    }
}
function eliminaOrden(id_entrega){
    idaeliminar = id_entrega;
}
function confirmaEliminar(){
    console.log("Si trata de eliminar")
    $.getJSON("del_pedido.php",{id_entrega:idaeliminar}).done(function(datos){
        if(datos.resp == "si"){
            consulta();
        }else{
            $('.toast').toast('show')
        }
    });
}
function consulta(){
    $.getJSON("con_pedidos.php").done(function(datos){
        orden = datos;
        actualizar();
    }).fail(function(e){
    });
}