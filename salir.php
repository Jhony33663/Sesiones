<?php 

session_start(); // inicia la session
session_destroy(); // elimina la sesion
if(isset($_COOKIE['Correo']) && isset($_COOKIE['pass'])){  // si existen las cookies se kas guarda en una variable para proceder a destruirlas
    $correo =$_COOKIE['correo'];
    $pass =$_COOKIE['pass'];

setcookie('correo',$correo,time()-1); // destruccion -1 o - 300
setcookie('pass',$pass,time()-1);
}   
echo "Se ha cerrado sesion correctamente "; 
header('Location:  login.php');
?>