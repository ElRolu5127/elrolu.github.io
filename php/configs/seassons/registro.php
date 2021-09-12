<?php

include "php/configs/Database.php";
$user = $_POST["user-reg"];
$email = $_POST["email-reg"];
$pass = $_POST["pass-reg"];
$repass = $_POST["repass-reg"];
$repass = hash('sha512', $repass);
$pass = hash('sha512', $pass);

		$query_users = "INSERT INTO $table_db1 (email, pass, user) values ('$email','$pass','$user')";







        if($user == !0){
            if($email == !0){
                if($pass == !0){
                    if($pass == $repass){
                        $verify_email = mysqli_query($conexion, "SELECT * FROM $table_db1 WHERE email='$email'");
                        if(mysqli_num_rows($verify_email) > 0){
                            echo "<script> alert('Este correo ya esta en uso porfavor use otro') </script>";
                            exit;
                        }else{
                            $ejecutar = mysqli_query($conexion, $query_users);
                            include "php/configs/close-bd.php";
                            echo "<script> alert('Se Creo La Cuenta Correctamente');</script>";
                        }
                    }else{
                        echo "<script> alert('Las Contraseñas No Coinciden, Porfavor Vuelva A Intentarlo'); </script>";
                    }
                }else{
                    echo "<script> alert('Porfavor Introduzca Una Contraseña'); </script>";
                }
            }else{
            echo "<script> alert('Porfavor Introduzca Un Correo'); </script>";
        }
        }else{
            echo "<script> alert('Porfavor Introduzca Su Nombre Completo'); </script>";
            }

?>