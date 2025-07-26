<?php
    include('../conexion.php');

    $link=conectar();

    $id_admin=$_REQUEST['txt_id'];
    $nombre=$_REQUEST['txt_nombre'];
    $correo=$_REQUEST['txt_correo'];
    $clave=$_REQUEST['txt_clave'];


    $sql="insert into administrador values ($id_admin, '$nombre','$correo','$clave')";

    $res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.all.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css " rel="stylesheet">
            
    </head>
    <body>
        <?php

            echo "
            <script type='text/javascript'>
                Swal.fire({
                icon : 'success',
                title : 'Operación exitosa',
                text :  'Administrador creado con éxito'
                }).then((result) => {
                    if(result.isConfirmed){
                    window.location='./administradores.php';
                    }
                }); 
            </script>";
        ?>
    
        
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="./sw/dist/sweetalert2.min.js"></script>
    </body>
    </html>


