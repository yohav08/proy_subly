<!doctype html>
<html lang="es">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
      <script type="text/javascript" language="Javascript" src="./js/funciones.js"></script>

      <title>Administradores</title>
   </head>
   <body>
   
<?php

   function consultarProductos(){
      include_once('./conexion.php');
      $link=conectar();

      $sql="select p.cod_producto, p.nombre, p.unidades, p.precio, p.descripcion, t.tipo from 
      producto as p inner join tipo as t on p.cod_tipo = t.cod_tipo";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarProductosAdm(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select p.cod_producto, p.nombre, p.unidades, p.precio, p.descripcion, t.tipo from 
      producto as p inner join tipo as t on p.cod_tipo = t.cod_tipo";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscarProductos($cod_producto){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$cod_producto;

      $sql="select p.cod_producto, p.nombre, p.unidades, p.precio, p.descripcion, t.tipo from 
      producto as p inner join tipo as t on p.cod_tipo = t.cod_tipo where p.cod_producto = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscartipos(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select * from tipo";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarCompras(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select cod_compra, fecha, direccion, ciudad, num_tarjeta,id_cliente from 
      compra";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarClientes(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select id_cliente, nombre, correo, telefono from cliente";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }
   function consultarAdmins(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select * from administrador";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscarAdmin($id_admin){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$id_admin;

      $sql="select * from administrador where id_admin = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

?>

<script src="./bootstrap/js/bootstrap.min.js"></script>
      <script src="./sw/dist/sweetalert2.min.js"></script>
      <script src="./js/jquery-3.6.1.min.js"></script>

   </body>

</html>