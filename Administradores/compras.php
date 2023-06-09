<!DOCTYPE html>
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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <!-- <a href="menu.php?op=1"><button type="button">MOSTRAR</button></a> -->
                        <li class="nav-item"><a class="nav-link" href="./compras.php">Compras</a></li>
                        <li class="nav-item"><a class="nav-link" href="./clientes.php">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="./admins.php">Administradores</a></li>                       
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex">
            <div style="margin: 20px;" class="card d-block col-sm-3">
                <div class="card-body">
                    <form class="" action="" method="POST">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" class="form-control" placeholder="Identificación" required>
                        </div>
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="date" class="form-control" placeholder="Fecha" required>
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" class="form-control" placeholder="Direccion" required>
                        </div>
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input type="text" class="form-control" placeholder="Ciudad" required>
                        </div>
                        <div class="form-group">
                            <label>#Targeta</label>
                            <input type="text" class="form-control" placeholder="Número de targeta" required>
                        </div>
                        <div class="form-group">
                            <label>Cliente</label>
                            <input type="text" class="form-control" placeholder="Cliente" required>
                        </div>
                        <div class="form-group">
                            <label>Vendedor</label>
                            <input type="text" class="form-control" placeholder="Vendedor" required>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between">
                            <input style="margin-left: auto; margin-right: auto;" type="submit" value="Agregar" class="col-sm-4 btn btn-primary">
                            <input style="margin-left: auto; margin-right: auto;" type="submit" value="Actualizar" class=" col-sm-4 btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
            <div style="margin: 20px;border-radius: 5px;" class="table-responsive d-block col-sm-8">
                <table class="table table-dark">
                    <thead>
                        <tr class="bg-primary">
                            <th scope="col">ID</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Vendedor</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-light">
                            <th scope="row">1</th>
                            <td>fecha</td>
                            <td>direccion</td>
                            <td>ciudad</td>
                            <td>Cliente</td>
                            <td>Vendedor</td>
                            <td>
                                <a class="btn btn-warning" href="">Editar</a>
                                <a class="btn btn-danger" href="">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer-->
        <footer class="py-4 bg-dark" style="position: fixed;bottom: 0; width: 100%; ">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bryan Sánchez & Yohana Avila</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>