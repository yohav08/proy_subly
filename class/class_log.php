<?php
session_start();
include('class.php');
class Login{

    public function validar($user,$pass){
        //validar si el usuario existe o no
        $sql="select * from administrador where id_admin='$user'";
        $res=mysqli_query(Conectar::conec(), $sql);

        if($row=mysqli_fetch_array($res)){
            $sql1="select * from administrador where id_admin='$user' and clave='$pass'";
            $res1=mysqli_query(Conectar::conec(),$sql1);
            
            if($row1=mysqli_fetch_array($res1)){
                //se crea la variable de SESION
                $_SESSION['usuario']=$row1['id_admin'];
                echo "
                <script type='text/javascript'>
                 Swal.fire({
                 icon : 'success',
                title : 'BIENVENIDO',
                 text :  'Usuario #$_SESSION[usuario] al Sistema'
                }).then((result) => {
                     if(result.isConfirmed){
                     window.location='./Administradores/home.php';
                    }
                }); </script>";
            }else{
                $_SESSION['usuario']=NULL;
                echo "
                <script type='text/javascript'>
                 Swal.fire({
                 icon : 'error',
                title : 'ERROR!!',
                 text :  ' el usuario #$user o contraseña  no son correctos'
                }).then((result) => {
                     if(result.isConfirmed){
                     window.location='./index.php';
                    }
                }); </script>";

            }

        }else{
            echo "
                <script type='text/javascript'>
                 Swal.fire({
                 icon : 'error',
                title : 'ERROR!!',
                 text :  ' el usuario #$user no existe en el sistema'
                }).then((result) => {
                     if(result.isConfirmed){
                     window.location='./index.php';
                    }
                }); </script>";

        }
    }
}
?>