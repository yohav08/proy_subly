<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
    <script type="text/javascript" language="Javascript" src="./js/funciones.js"></script>
   
    <title>Administradores</title>
</head>

<body>
    <?php
class Conectar{
    public static function conec(){
        $host="localhost";
        $user="root";
        $pass="";
        $db_name="proy_subly";
        //conectarnos a la BD
        $link=mysqli_connect($host,$user,$pass) 
         or die ("ERROR Al conectar la BD".mysqli_error($link));
         //seleccionar la BD
         mysqli_select_db($link,$db_name) 
          or die ("ERROR Al seleccionar la BD".mysqli_error($link));
          return $link;
    }   
}
class Admins{
    private $admin;

    public function __construct(){
        $this->admin = array();
    }

    public function veradmin(){
        $sql="select * from administrador";
        $res=mysqli_query(Conectar::conec(),$sql) or die ("ERROR em la Consulta $sql".mysqli_error($link));
        //recorrer la tabla Administradores
        while($row=mysqli_fetch_assoc($res)){
            $this->admin[]= $row;
        }
        return $this->admin;       
    }
    //método insertar
    public function insertadmin($id_admin,$nombre,$correo,$clave){
        $sql="insert into administrador values ('$id_admin','$nombre','$correo','$clave')";
        $res=mysqli_query(Conectar::conec(),$sql);
        echo "
        <script type='text/javascript'>
        Swal.fire({
            icon : 'success',
            title : 'Operacion Exitosa!!',
            text :  'Administrador creado Correctamente'
        }).then((result) => {
            if(result.isConfirmed){
                window.location='../Administradores/admins.php';
            }
        });
        </script>";

    }
    //metodo editar
    public function editaradmin($id_admin,$nombre,$correo,$clave){
        $sql="update administrador set nombre='$nombre',correo='$correo',clave='$clave' where id_admin='$id_admin'";
        $res=mysqli_query(Conectar::conec(),$sql);
        echo "
        <script type='text/javascript'>
        Swal.fire({
            icon : 'success',
            title : 'Operacion Exitosa!!',
            text :  'Datos editados Correctamente'
        }).then((result) => {
            if(result.isConfirmed){
                window.location='../Administradores/admins.php';
            }
        });
        </script>";
    }

    //metodo para traer el id del Administrador
    public function get_idadmin($id_admin){
        $sql="select * from administrador where id_admin='$id_admin'";
        $res=mysqli_query(Conectar::conec(),$sql);
        if($row=mysqli_fetch_assoc($res)){
            $this->admin[]=$row;
        }
        return $this->admin;
    }

    //metodo eliminar
    public function eliminaradmin($id){
        $sql="delete from administrador where id_a='$id'";
        $res=mysqli_query(Conectar::conec(),$sql);
        echo "
    <script type='text/javascript'>
    Swal.fire({
        icon : 'success',
        title : 'Operacion Exitosa!!',
        text :  'El Administrador con id $id fue eliminado Correctamente'
    }).then((result) => {
        if(result.isConfirmed){
            window.location='../Administradores/admins.php';
        }
    }); </script>
    ";

    }
}

class Clientes{
    private $client;

    public function __construct(){
        $this->client = array();
    }

    public function veradmin(){
        $sql="select * from cliente";
        $res=mysqli_query(Conectar::conec(),$sql) or die ("ERROR em la Consulta $sql".mysqli_error($link));
        //recorrer la tabla Clientes
        while($row=mysqli_fetch_assoc($res)){
            $this->client[]= $row;
        }
        return $this->client;       
    }
    //método insertar
    public function insertcliente($id_cliente,$nombre,$correo,$clave,$telefono){
        $sql="insert into administrador values ('$id_cliente','$nombre','$correo','$clave','$telefono')";
        $res=mysqli_query(Conectar::conec(),$sql);
        echo "
        <script type='text/javascript'>
        Swal.fire({
            icon : 'success',
            title : 'Operacion Exitosa!!',
            text :  'Cliente creado Correctamente'
        }).then((result) => {
            if(result.isConfirmed){
                window.location='../Administradores/clientes.php';
            }
        });
        </script>";

    }
    //metodo editar
    public function editarcliente($id_cliente,$nombre,$correo,$clave,$telefono){
        $sql="update cliente set nombre='$nombre',correo='$correo',clave='$clave',telefono='$telefono' where id_cliente='$id_cliente'";
        $res=mysqli_query(Conectar::conec(),$sql);
        echo "
        <script type='text/javascript'>
        Swal.fire({
            icon : 'success',
            title : 'Operacion Exitosa!!',
            text :  'Datos editados Correctamente'
        }).then((result) => {
            if(result.isConfirmed){
                window.location='../Administradores/clientes.php';
            }
        });
        </script>";
    }

    //metodo para traer el id del Administrador
    public function get_idcliente($id_cliente){
        $sql="select * from cliente where id_cliente='$id_cliente'";
        $res=mysqli_query(Conectar::conec(),$sql);
        if($row=mysqli_fetch_assoc($res)){
            $this->client[]=$row;
        }
        return $this->client;
    }

    //metodo eliminar
    public function eliminara($id_cliente){
        $sql="delete from cliente where id_cliente='$id_cliente'";
        $res=mysqli_query(Conectar::conec(),$sql);
        echo "
    <script type='text/javascript'>
    Swal.fire({
        icon : 'success',
        title : 'Operacion Exitosa!!',
        text :  'El Cliente con id $id fue eliminado Correctamente'
    }).then((result) => {
        if(result.isConfirmed){
            window.location='../Administradores/clientes.php';
        }
    }); </script>
    ";

    }
}

?>

<!--  -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./sw/dist/sweetalert2.min.js"></script>
    <script src="./js/jquery-3.6.1.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>