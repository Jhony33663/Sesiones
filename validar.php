<?php
//-------------------------------------------------Conexion
$servername = "localhost";
$username = "root";
$pwd = "";
$bdd = "usuarios";

$conexion = new mysqli($servername, $username, $pwd, $bdd);
if ($conexion->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//--------------------------------------------------------------------

session_start(); // incializa la sesion

$correo = $_POST['txtCorreo'];  // paso de valores del formulario a php
$pass = $_POST['txtPassword'];
$rec= $_POST['cbxRecuerdame'];




$sql ="SELECT * FROM usuarios  WHERE correo = '$correo' && pass = '$pass'"; // condiccion de usuario y contraseña segun la base

$resultado = $conexion ->query($sql);

$row = $resultado -> fetch_assoc(); // toma los campos de la base

if($row['correo']==$correo && $row['pass']==$pass){  // validacion de correo y contraseña
$_SESSION['correo'] = $correo;  // crea variables de sesion 
$_SESSION['pass'] = $pass;

if(!empty($rec)){  // si el check esta seleccionado o no vacio crear cookies

    setcookie("correo",$_SESSION['correo'],time()+300) ;// creacion de cookie de un dia  84600 - 300 5 minutos
    setcookie("pass",$_SESSION['pass'],time()+300) ;// creacion de cookie de un dia  84600 
}

header("Location:index.php"); // direcciona formularios
}else{
header("Location:login.php"); }


if($resultado -> num_rows >0){

    echo "siuu";
}else {echo "noou";}

?>