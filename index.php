<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="./startbootstrap-shop-homepage-gh-pages/css/style-login.css">

        <title>Iniciar Sesión</title>
    </head>
    <body  onload="limpiar();">
        <div class="sidenav">
            <div class="login-main-text">
            <h2>Subly-Art<br> Inicio de Sesión</h2>
            <p>Inicia sesión o registrate para acceder.</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form name="form" action="verifica.php" method="POST">
                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input type="text" name="user" class="form-control" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="passw">Contraseña</label>
                        <input type="password" name="passw" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <!-- <a href="menu.php?op=1"><button type="button">MOSTRAR</button></a> -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-black">Iniciar Sesión</button>
                    </div>
                </form>
                <div class="text-center" style="margin-top: 10px;">
                    <a href="./registro.php"><button class="btn btn-info">Registrarse</button></a>
                </div>
            </div>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
        <script src="./bootstrap/js/bootstrap.min.js"></script>
        <script src="./sw/dist/sweetalert2.min.js"></script>
        <script src="./js/jquery-3.6.1.min.js"></script>
    </body>
</html>