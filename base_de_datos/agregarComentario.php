<?php
//conexion con la base de datos
    require ("../base_de_datos/sql_conection.php");
//Se autoinicia una sesión
    session_start();
//print_r($_POST);
    $Nombre_Usuario = $_POST['Nombre_Usuario'];
    $Comentario = $_POST['Comentario'];
//Inserta los datos 
    $agregar = "INSERT INTO comentario (Nombre_Usuario, Comentario) VALUES ('$Nombre_Usuario', '$Comentario')";
    $resultado = $mysqli->query($agregar) or die ($mysqli->error);
    echo '
        <script>
            alert ("¡Se agrego correctamente el Comentario!");
            window.location = "../pantallas/datos_comentario.php";
        </script>
        ';
?>