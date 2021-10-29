<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    include 'conexion.php';
    $login = $con->query("SELECT * FROM usuario where username='$username' and password='$password'");
     
    $num_resultados = mysqli_num_rows($login);

    //echo $num_resultados;

    if($num_resultados > 0) {
        header('Location: admin.php');
    } else {
        header('Location: noaccess.php');
    }
      
?>