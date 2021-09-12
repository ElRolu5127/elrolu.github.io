<?php

if($_GET){
    include "modulos/inicios/".$_GET['page'].".php";
}else{
    include "modulos/inicios/principal.php";
}


?>