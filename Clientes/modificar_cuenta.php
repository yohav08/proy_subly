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
                                        <a href="./carrito.php">
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
                                                <a style='text-decoration: none;' href='./modificar_cuenta.php?id_cliente=".$ses."'><button class='dropdown-item' type='button'>Editar Cuenta</button></a>
                                                <div class='dropdown-divider'></div>
                                                <a href='./index.php' style='text-decoration:none;'>
                                                    <button class='dropdown-item' type='button'>Salir</button>
                                                </a>
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
        <!-- FIN Barra de navegación-->

        <!-- Modulo Modificar Cuenta-->

        <!-- Formulario Modificar Cuenta-->
        <?php 
        include('./consultar_SQL.php');
        $id_cliente=$_SESSION['usuario'];
        $res=consultarCliente($id_cliente);
        foreach($res as $row){
        ?>
        <div class="container">
            <h2 class="text-black mt-3">Modificar Cuenta</h2>
            <form action="./modificarCuenta.php" method="GET" class="row r-3">
                <div style="padding: 10px 400px 20px;">

                    <div class="mb-3">
                        <label for="txt_id_cliente" class="form-label">Identificación</label>
                        <input type="text" class="form-control" name="txt_id_cliente" value="<?php echo $row['id_cliente']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txt_nombre"  value="<?php echo $row['nombre']?>">
                    </div> 
                    <div class="mb-3">
                        <label for="txt_correo" class="form-label">Correo</label>
                        <input type="mail" class="form-control" name="txt_correo"value="<?php echo $row['correo']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txt_telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" name="txt_telefono" value="<?php echo $row['telefono']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txt_clave" class="form-label">Clave</label>
                        <input type="password" class="form-control" name="txt_clave" value="<?php echo $row['clave']?>">
                    </div>
                
                    <?php }?>
                    <center>
                        <input type="submit" value="Modificar datos Cuenta" class="btn btn-primary">
                    </center>
                
                </div>
            </form>
        </div>
        <div style= "margin: 8% auto;"></div>
        <!-- FIN Formulario Modificar Cuenta-->

        <!-- FIN Modulo Modificar Cuenta-->

        <!-- Footer-->
        <footer class="py-5 bg-dark" style="position: fixed;bottom: 0; width: 100%; ">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bryan Sánchez & Yohana Avila</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>