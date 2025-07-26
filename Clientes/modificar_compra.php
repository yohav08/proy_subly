<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Subly Art</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/bootstrap.css" rel="stylesheet" />  
</head>
<body>
    <!-- Barra de navegación-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../home.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <?php                            
                        include_once('../conexion.php');
                        include('../class/class_log.php');
                        
                        $ses=$_SESSION['usuario'];
                        
                        $rescl=mysqli_query(conectar(), "select id_cliente from cliente where id_cliente='$ses'");

                        if($ses=mysqli_fetch_array($rescl)){
                            $ses=$_SESSION['usuario'];
                            // Agregando compras y carrito
                            echo '<li class="nav-item"><a class="nav-link" href="./compras.php">Compras</a></li>';
                            echo '</ul>
                                <form class="d-flex">
                                    <a href="../Clientes/carrito.php">
                                        <button class="btn btn-outline-dark" type="button">
                                            <i class="bi-cart-fill me-1"></i>
                                                Carrito de compras
                                        </button>
                                    </a>
                                </form>
                            <ul class="dropdown-menu text-center">';

                            $nombre = mysqli_query(conectar(), "select nombre from cliente where id_cliente='$ses'")->fetch_row();
                            $correo = mysqli_query(conectar(), "select correo from cliente where id_cliente='$ses'")->fetch_row();

                            echo "
                            </ul>
                                <form class='d-flex' style='margin: 10px;'>
                                    <div class='btn-group'>
                                        <button type='button' class='btn btn-outline-dark dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                            $nombre[0]
                                        </button>
                                        <div class='dropdown-menu dropdown-menu-right'>
                                            <button class='dropdown-item' type='button'> $nombre[0] </button>
                                            <button class='dropdown-item' type='button'> $correo[0] </button>
                                            <a style='text-decoration: none;' href='./modificar_cuenta.php?id=".$ses."'><button class='dropdown-item' type='button'>Editar Cuenta</button></a>
                                            <div class='dropdown-divider'></div>
                                            <button class='dropdown-item' type='button'>Salir</button>
                                        </div>
                                    </div>
                                </form>
                            <ul class='dropdown-menu text-center'>
                            ";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Formulario Crear Producto-->
    <?php 
        include('./consultar_SQL.php');
        $id_cliente=$_SESSION['usuario'];
        $cod_compra=  $_GET['cod_compra'];
        $res=consultar_CompraCli($id_cliente, $cod_compra);
        foreach($res as $row){
        ?>
    <div class="container">
        <h2 class="text-black mt-3 mb-3">Modificar Compra</h2>
        <form action="./modificarCompra.php" method="GET" class="row g-3">
            
            <div class="col-6">
                <label for="txt_cod" class="form-label">Código compra</label>
                <input type="text" class="form-control" name="txt_cod" value="<?php echo $row['cod_compra']?>"  readonly>
            </div>
            <div class="col-6">
                <label for="txt_fechaCompra" class="form-label">Fecha</label>
                <input type="text" class="form-control" name="txt_fechaCompra" value="<?php echo $row['fecha']?>" readonly>
            </div>
            <div class="col-6">
                <label for="txt_direccionCompra" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="txt_direccionCompra" value="<?php echo $row['direccion']?>" required>
            </div>
            <div class="col-6">
                <label for="txt_ciudadCompra" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="txt_ciudadCompra" value="<?php echo $row['ciudad']?>" required>
            </div>
            <center>
            <div class="col-6">
                <label for="txt_numTarjeta" class="form-label">Número de Tarjeta</label>
                <input type="text" class="form-control" name="txt_numTarjeta" value="<?php echo $row['num_tarjeta']?>" required>
            </div>
            </center>
        <?php }?>
            <center>
                <input type="submit" value="Modificar Compra" class="btn btn-primary mt-3 mb-5">
            </center>
        </form>
    </div>
    <!-- FIN Formulario Crear Producto-->
    <div style= "margin: 12% auto;"></div>
    <!-- Footer-->
    <footer class="py-5 bg-dark" style="bottom: 0; width: 100%;">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bryan Sánchez & Yohana Avila</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>