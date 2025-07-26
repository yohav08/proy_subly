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
        <link rel="stylesheet" href="./css/style-login.css">
        <script type="text/javascript" language="Javascript" src="./js/funciones.js"></script>
        
        <title>Registrarse</title>
    </head>
    <body>
        <div class="sidenav">
            <div class="login-main-text">
            <h2>Subly-Art<br> Registro de Cuenta</h2>
            <p>Inicia sesión o registrate para acceder.</p>
            </div>
        </div>
        <div class="main">
            
            <div class="col-md-6 col-sm-12">
            <div style="margin-top: 100px;">
                <form action="./registraCliente.php" method="GET">
                    <div class="form-group">
                        <label>Identificación</label>
                        <input type="text" name="txt_idcliente" class="form-control" placeholder="Identificación" required>
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="txt_nombrecliente" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="mail" name="txt_correocliente" class="form-control" placeholder="Correo@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="txt_clavecliente" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="tel" name="txt_telefonocliente" class="form-control" placeholder="Teléfono" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-black">Registrarse</button>
                    </div>
                </form>
                <div class="text-center" style="margin-top: 10px;">
                    <a href="./index.php"><button class="btn btn-info">Iniciar Sesión</button></a>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>