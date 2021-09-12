<?php
        session_start();

include "php/configs/Database.php";

$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = hash('sha512', $pass);

    $verify_log = mysqli_query($conexion, "SELECT * FROM $table_db1 WHERE email='$email' and pass='$pass'");

    if(mysqli_num_rows($verify_log) > 0){
        $_SESSION['usuario'] = $email;
        echo "<script> alert('Iniciaste Sesion Correctamente');  window.location('index.php'); </script>";
        exit;
    }else{
        echo "<script> alert('El correo o la contraseña no coinciden, Porfavor verifique los datos introducidos y vuelva a intentarlo') </script>";
        session_destroy();
        exit;
    }


?>