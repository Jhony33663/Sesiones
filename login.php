<?php

$correo = "";
$pass = "";

session_start();

if (isset($_SESSION['correo'])) { // validacion cambio de formularios
    header("Location: index.php");
} else {
if(isset($_COOKIE['correo']) && isset($_COOKIE['pass'])){ // se inicializa las cookies en la variable si es isset(si existe)
    $correo = $_COOKIE['correo'];
    $pass = $_COOKIE['pass'];}
?>




    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{GP} Formulario de Contacto</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="js/jquery.js"></script>
    </head>


    <body>
        <section class="d-flex justify-content-center align-items-center">
            <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4">
                <div class="mb-4 d-flex justify-content-start align-items-center">

                    <h4> <i class="bi bi-chat-left-quote"></i> &nbsp; Formulario</h4>
                </div>
                <div class="mb-1">

                    <form id="contacto" method="POST" action="validar.php"> <!-- envia los datos de login a validar -->



                        <div class="mb-4">
                            <label for="correo"><i class="bi bi-credit-card-2-front "></i> Correo Electronico</label>
                            <input type="email" class="form-control" name="txtCorreo" id="txtCorreo" placeholder="ej: jonathan.mata@gmail.com" value="<?php echo $correo; ?>" required> <!-- imprime la variable en el campo-->
                            <div class="correo text-danger"></div>

                        </div>


                        <div class="mb-4">
                            <label><i class="bi bi-lock"></i> Password: </label> <label> <i class="bi bi-eye-slash" id="togglePassword"></i></label>
                            <input type="password" class="form-control" name="txtPassword" id="txtPassword" value="<?php echo $pass; ?>" />
                            <div class="correo text-danger"></div>

                        </div>

                        <div class="form-check">
                            <input class="form-check-input" name="cbxRecuerdame" type="checkbox" value="1" id="cbxRecuerdame">

                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Recuerdame
                            </label>
                        </div>


                        <div class="mb-2">
                            <button id="botton" class="col-12 btn btn-primary d-flex justify-content-between ">
                                <span>Enviar </span><i id="icono" class="bi bi-cursor-fill "></i>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </section>


    <?php } ?>


    <script>
        // validacion mostrar contraseña
        const togglePassword = document
            .querySelector('#togglePassword');

        const password = document.querySelector('#txtPassword');

        togglePassword.addEventListener('click', () => {

            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';

            password.setAttribute('type', type);

            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script>

    </body>
    </html>