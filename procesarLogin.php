<?php

    $usuario = $_POST['username'];
    $contra = $_POST['password'];

    include 'conexion.php';

    $login = $con->query("SELECT * FROM usuario where username='$usuario' and password='$contra'");
     
    $num_resultados = mysqli_num_rows($login);

    if($num_resultados > 0) {
        header('Location: admin.php');
    } else {
        header('Location: noaccess.php');
    }
      
?>