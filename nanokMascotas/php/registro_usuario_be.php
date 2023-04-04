<?php

    include 'conexion_be.php';

    $nombre_completo= $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena)
    VALUES('$nombre_completo', '$correo', '$usuario','$contrasena')";

//Verificar que el correo no se repita en base de datos
    $verificar_C = mysqli_query($conexion, "SELECT * from usuarios where correo='$correo'");

    if(mysqli_num_rows($verificar_C) > 0){
        echo ' 
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }
    //Verificar que el usuario no se repita
    $verificar_U = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario'");
    if(mysqli_num_rows($verificar_U)> 0){
        echo ' 
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '<script> 
            alert("Cuenta creada exitosamente");
            window.location = "../index.php";            
        </script>';
    }else{
        echo '<script> 
            alert("cuenta no creada, intentalo de nuevo");
            window.location = "../index.php";            
        </script>';
    }
    mysqli_close($conexion);
?>