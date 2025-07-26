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
        <link href="./css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Barra de navegación-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="./home.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <?php                      
                            include('./class/class_log.php');

                            function conex(){
                                include_once('./conexion.php');
                                $link =conectar();
                                return $link;
                            }

                            $ses=$_SESSION['usuario'];
                            
                            $resad=mysqli_query(conex(), "select id_admin from administrador where id_admin='$ses'");
                            $rescl=mysqli_query(conex(), "select id_cliente from cliente where id_cliente='$ses'");

                            if($ses=mysqli_fetch_array($resad)){
                                $ses=$_SESSION['usuario'];
                                //Agregando módulos
                                echo '<li class="nav-item"><a class="nav-link" href="./Administradores/categorias.php">Categorías</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="./Administradores/compras.php">Compras</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="./Administradores/productos.php">Productos</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="./Administradores/clientes.php">Clientes</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="./Administradores/administradores.php">Administradores</a></li>';

                                $nombre = mysqli_query(conex(), "select nombre from administrador where id_admin='$ses'")->fetch_row();
                                $correo = mysqli_query(conex(), "select correo from administrador where id_admin='$ses'")->fetch_row();

                                echo "
                                </ul>
                                    <form class='d-flex'>
                                        <div class='btn-group'>
                                            <button type='button' class='btn btn-outline-dark dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                $nombre[0]
                                            </button>
                                            <div class='dropdown-menu dropdown-menu-right'>
                                                <button class='dropdown-item' type='button'> $nombre[0] </button>
                                                <button class='dropdown-item' type='button'> $correo[0] </button>
                                                <div class='dropdown-divider'></div>
                                                <a href='./index.php' style='text-decoration:none;'>
                                                    <button class='dropdown-item' type='button'>Salir</button>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                <ul class='dropdown-menu text-center'>
                                ";
                                
                            }else if($ses=mysqli_fetch_array($rescl)){
                                $ses=$_SESSION['usuario'];
                                // Agregando compras y carrito
                                echo '<li class="nav-item"><a class="nav-link" href="./Clientes/compras.php">Compras</a></li>';
                                echo '</ul>
                                    <form class="d-flex">
                                        <a href="./Clientes/carrito.php">
                                            <button class="btn btn-outline-dark" type="button">
                                                <i class="bi-cart-fill me-1"></i>
                                                    Carrito de compras
                                            </button>
                                        </a>
                                    </form>
                                <ul class="dropdown-menu text-center">';

                                $nombre = mysqli_query(conex(), "select nombre from cliente where id_cliente='$ses'")->fetch_row();
                                $correo = mysqli_query(conex(), "select correo from cliente where id_cliente='$ses'")->fetch_row();

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
                                                <a style='text-decoration: none;' href='./Clientes/modificar_cuenta.php?id_cliente=".$ses."'><button class='dropdown-item' type='button'>Editar Cuenta</button></a>
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
        <!-- Titulo-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Subly-Art</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Tienda de Artículos sublimados</p>
                </div>
            </div>
        </header>
        <!-- Productos-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php 
                    include('./Administradores/consultarSQL.php');
                    $res=consultarProductos();
                    foreach($res as $row){?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Imagen-->
                            <?php
                            echo '<img class="card-img-top" src="./img/'.$row['cod_producto'].'.jpg" />'
                            ?>
                            <!-- Detalles-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Nombre-->
                                    <h5 class="fw-bolder"><?php echo $row['nombre']?></h5>
                                    <p class="text-bg-success"><?php echo $row['tipo']?></p>
                                    
                                    <!-- Precio-->
                                    $<?php echo $row['precio']?>
                                </div>
                            </div>
                            <!-- añadir-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" 
                                href="./Clientes/añadirCarrito.php?id_cliente=<?php echo "$ses";?>&cod_producto=<?php echo $row['cod_producto']?>">Añadir a Carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
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
