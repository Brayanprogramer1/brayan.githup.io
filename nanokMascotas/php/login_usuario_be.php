<?php
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    AND contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        echo '
        <script>
        alert("sesion iniciada");
        window.location = "../inicio_Re/indexre.php";
        </script>
        ';
        exit;
    }else{
        echo '
        <script>
            alert("Usuario y/o contraseña invalida");
            window.location = "../index.php"
        </script>
        ';
        exit;
    }

?>