<?php
/*
 * cerrar sesión 
 */
session_start();
//borrar todas las variables de session que existen 
session_destroy();
//redireccionar 
header ('location: ../index.php');
?>