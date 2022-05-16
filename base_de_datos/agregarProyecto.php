<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agregado</title>
</head>
<body>
<div class="alert alert-success d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"></svg>
<div>
Se ha Agregado un Proyecto ✔
</div>
</div>
<?php


require ("../base_de_datos/Conexion.php");

//print_r($_POST);
    $ID_Modulo = $_POST['ID_Modulo'];
    $ID_Persona = $_POST['ID_Persona'];

$agregar = "INSERT INTO proyecto (ID_Modulo, ID_Persona) VALUES ('$ID_Modulo', '$ID_Persona')";
$resultado = $mysqli->query($agregar) or die ($mysqli->error);
?>

<a href="../pantallas/datosProyecto.php"><button class="btn btn-success">Ir a la Lista</button></a>

<!-- Bootstrap JavaScript Libraries -->
<script src="../popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="../bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>