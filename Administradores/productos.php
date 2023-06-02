<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../startbootstrap-shop-homepage-gh-pages/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Barra de navegación-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <!-- <a href="menu.php?op=1"><button type="button">MOSTRAR</button></a> -->
                        <li class="nav-item"><a class="nav-link" href="./compras/compras.php">Compras</a></li>
                        <li class="nav-item"><a class="nav-link" href="./clientes/clientes.php">Clientes</a></li>
                    </ul>
                    <form class="d-flex">
                        <a href="./carito_compras/carrito_compras.php">
                            <button class="btn btn-outline-dark" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Carrito de compras
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </a>
                        <a href="./sesion.php">
                            <button class="btn btn-outline-dark" type="button">
                                Iniciar sesión
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Productos-->
        <div class="container">
            <form action="" method="get" class="row g-5">
                <div class="col-6">
                    <label for="txt_nomProducto" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="txt_nomProducto" placeholder="Escriba el nombre del producto" required>
                </div>
                <div class="col-6">
                    <label for="txt_unidadesProducto" class="form-label">Unidades</label>
                    <input type="text" class="form-control" id="txt_unidadesProducto" placeholder="Escriba las unidades del producto" required>
                </div>
                <div class="col-12">
                    <label for="txt_descripcionProducto" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="txt_descripcionProducto" placeholder="Escriba la descripción del producto" required>
                </div>
                <div class="col-6">
                    <label for="txt_unidadesProducto" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="txt_unidadesProducto" placeholder="Escriba las unidades del producto" required>
                </div>
                <div class="col-6">
                    <label for="txt_precioProducto" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="txt_precioProducto" placeholder="Escriba el precio del producto" required>
                </div>
            </form>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bryan Sánchez & Yohana Avila</p></div>
        </footer>
            <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>