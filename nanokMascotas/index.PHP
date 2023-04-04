<?php
        session_start();

        if(isset($_SESSION['usuario'])){
            header("location: indexre.php");
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion / Nanok Mascotas</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/iniciarsesion.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

    <div class="header-content">

        <div class="logo">
            <header>
            <a href="inicio_T/index.html"><h1 style="color: black;">Nanok<b>Mascotas</b></h1></a>
        </header>
       </div>
    </div>
        
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-register">

                <form action="php/login_usuario_be.php" method="post" class="formulario__login">

                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuario_be.php" method="post" class="formulario__register">

                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registarse</button>

                </form>

            </div>
        </div>

    </main>
    <div class="container-footer">

        <footer>

            <div class="logo-footer">
                <img src="imagenes/nanok_logo1.png" alt="">
            </div>

            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"> </i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"> </i></a>
            </div>
            <hr>
            <h4>© Dream modelado</h4>
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>