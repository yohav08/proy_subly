<!doctype html>
<html lang="es">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
        <script type="text/javascript" language="Javascript" src="./js/funciones.js"></script>

      <title>Administradores</title>
   </head>
   <body>
   
   <?php
    include('./conexion.php');

    $link=conectar();

    $id_cliente=$_REQUEST['txt_idcliente'];
    $nombre=$_REQUEST['txt_nombrecliente'];
    $correo=$_REQUEST['txt_correocliente'];
    $clave=$_REQUEST['txt_clavecliente'];
    $telefono=$_REQUEST['txt_telefonocliente'];

    $sql="insert into cliente values ($id_cliente, '$nombre', '$correo', '$clave', $telefono)";

    $res=mysqli_query($link,$sql)
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));
    echo "
        <script type='text/javascript'>
            Swal.fire({
            icon : 'success',
            title : '¡Operacion Exitosa!',
            text :  'Usuario creado con éxito'
            }).then((result) => {
                if(result.isConfirmed){
                window.location='./index.php';
                }
            }); 
        </script>";
        ?>

        <script src="./js/bootstrap.min.js"></script>
        <script src="./sw/dist/sweetalert2.min.js"></script>
        <script src="./js/jquery-3.6.1.min.js"></script>
  
     </body>
  
  </html>
