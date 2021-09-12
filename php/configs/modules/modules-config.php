<?php

$modulePrincipal = "principal";
if($_GET){
    $pag = $_GET["page"];
    include "modulos/inicios/".$pag.".php";
}else{
    include "modulos/inicios/".$modulePrincipal.".php";
}

?>