<?php
    
    include('../conexion.php');

    $link=conectar();

    $fecha=$_REQUEST['txt_fechaCompra'];
    $direccion=$_REQUEST['txt_direccionCompra'];
    $ciudad=$_REQUEST['txt_ciudadCompra'];
    $num_tarjeta=$_REQUEST['txt_numTarjeta'];
    $cliente=$_REQUEST['id_cliente'];
    
    $sql="insert into compra(fecha, direccion, ciudad, num_tarjeta, id_cliente, id_admin) values ('$fecha', '$direccion', '$ciudad', '$num_tarjeta', $cliente, 123)";

    $res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

    include ('./consultar_SQL.php');
    $res=consultarCarrito($cliente);
    $res1=consultar_codCompra();
    $row_res1 = $res1->fetch_assoc();
    foreach($res as $row){
        $sql1="insert into producto_compra values (".$row['cod_producto'].", ".$row_res1['max(cod_compra)'].")";

        $res2=mysqli_query($link,$sql1) 
        or die("ERROR EN LA CONSULTA $sql1".mysqli_error($link));
    }
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
                text :  'Compra realizada con éxito'
                }).then((result) => {
                    if(result.isConfirmed){
                    window.location='../home.php';
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