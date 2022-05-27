<?php

session_start();
$correo = $_SESSION['correo'];


if(isset($_SESSION['correo'])){ // validacion entre formularios
    



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="js/jquery.js"></script>
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo "Bienvenido   ".$correo; ?> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">...........................</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">............................</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">............................................
        </a>
        
      </li>  <li class="nav-item active">
        <a class="nav-link" href="salir.php">Cerrar  <span class="sr-only">Sesion</span></a>
      </li>
    
    </ul>
    
</nav>

</div>

    </head>
    




<?php }else{
header("Location: login.php");

}?>

<body background="img/e1.png">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6"><br>
                <center> <div style="color:black;" class="card-header">Formulario Estudiantes</div> </center>
                <div class="card-body">
                    <form style="background-color:transparent ;" class="form-control" name="frmDatos" method="POST" >

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label style="color:black;">Cedula: </label>
                                    <input class="form-control" type="text" name="txtCedula" id="txtCedula">
                                </div>
                                <div class="col">
                                    <label style="color:black;">Nombre: </label>
                                    <input class="form-control" type="text" name="txtNombre" id="txtNombre">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label style="color:black;">Materia: </label>
                                    <select class="form-control" name="cmbMateria" id="cmbMateria">
                                        <option value="0">Seleccione una Materia</option>
                                        <?php
                                        $sql = "SELECT * from materia";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $row['id_materia'] ?>"><?php echo $row['materia'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Canton --->
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label style="color:black;">Nota1: </label>
                                    <input class="form-control" type="text" name="txtNota1" id="txtNota1">
                                </div>
                                        
                                <div class="col">
                                    <label style="color:black;">Nota2: </label>
                                    <input class="form-control" type="text" name="txtNota2" id="txtNota2">
                                </div>
                                <div class="col">
                                    <label style="color:black;">Nota3:</label>
                                    <input class="form-control" type="text" name="txtNota3" id="txtNota3">
                                </div>
                        
                                
                                <div class="row">
                                </div>
                                <br>
                                <button type="submit" id="btnenviar" class="btn btn-primary">Guardar</button>
                    
                            </div>
                        </div>
                        </div>
                       
                    </form>
                </div>
            </div>

          
</body>

</html>