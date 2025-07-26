<?php
    include('../conexion.php');

    $link=conectar();

    $cod_producto=$_REQUEST['txt_codProducto'];
    $nombre=$_REQUEST['txt_nomProducto'];
    $descripcion=$_REQUEST['txt_descripcionProducto'];
    $unidades=$_REQUEST['txt_unidadesProducto'];
    $precio=$_REQUEST['txt_precioProducto'];
    $tipo=$_REQUEST['txt_tipoprod'];

    $sql="update producto set nombre='$nombre', descripcion='$descripcion', 
    unidades=$unidades, precio=$precio, cod_tipo=$tipo where cod_producto=$cod_producto";

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
                title : 'Operaciòn exitosa',
                text :  'Producto Modificado con éxito'
                }).then((result) => {
                    if(result.isConfirmed){
                    window.location='./productos.php';
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
