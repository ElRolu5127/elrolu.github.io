<?php

    session_start();
    session_destroy();
    echo 
    "<script> 
        alert('Se a cerrado session')
        window.location('index.php');
    </script>";


?>