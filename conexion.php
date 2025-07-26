<!doctype html>
<html lang="es">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
      <script type="text/javascript" language="Javascript" src="./js/funciones.js"></script>

      <title>Administradores</title>
   </head>
   <body>
   
   <?php
   function conectar(){
      $host="localhost";//nombre del host de mysql
      $user="root";//nombre del usuario de mysql
      $pass="";//password del usuario
      $db_name="proy_subly";//nombre de la BD
      //conectarnos a la BD IMAGINARIA
      $link=mysqli_connect($host,$user,$pass) 
         or die ("ERROR al conectar la BD".mysqli_error($link));
      //Seleccionr la BD IMAGINARIA
      mysqli_select_db($link,$db_name) 
      or die ("ERROR al seleccionar la BD".mysqli_error($link));
      return $link;
   }
   ?>

      <script src="./js/bootstrap.min.js"></script>
      <script src="./sw/dist/sweetalert2.min.js"></script>
      <script src="./js/jquery-3.6.1.min.js"></script>

   </body>

</html>