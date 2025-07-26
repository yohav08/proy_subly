<?php
function consultarCarrito($id_cliente){
    include_once('../conexion.php');
    $link=conectar();

    $id=$id_cliente;

    $sql="select p.cod_producto, p.nombre, p.unidades, p.precio, p.descripcion, t.tipo 
    from producto as p inner join tipo as t on (p.cod_tipo=t.cod_tipo) 
    WHERE p.cod_producto in (select cod_producto from carrito where id_cliente=$id)";

    $res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

    return $res;
}

function consultarUnidades($id_cliente){
    include_once('../conexion.php');
    $link=conectar();

    $sql="select unidades from carrito where id_cliente='$id_cliente'";

    $res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

    return $res;
}

function consultarCliente($id_cliente){
    include_once('../conexion.php');
    $link=conectar();

    $sql="select * from cliente where id_cliente='$id_cliente'";

    $res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

    return $res;
}


function consultar_Compras($id_cliente){
    include_once('../conexion.php');
    $link=conectar();

    $sql="select cod_compra, fecha, direccion, ciudad, num_tarjeta from 
    compra where id_cliente='$id_cliente'";

    $res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

    return $res;
}

function consultarCompra($compra){
    include_once('../conexion.php');
    $link=conectar();

    $sql="select * from 
    compra where cod_compra='$compra'";

    $res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

    return $res;
}

function consultar_codCompra(){
    include_once('../conexion.php');
    $link=conectar();

    $sql="select max(cod_compra) from compra";

    $res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

    return $res;
}

function consultarProductosCompra($compra){
    include_once('../conexion.php');
    $link=conectar();

    $sql="select * from 
    compra where cod_compra='$compra'";

    $res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

    return $res;
}

?>