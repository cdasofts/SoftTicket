<?php
/*
 * conexión a base de datos
 */

//asignar variable 
$conn= mysqli_connect('localhost', 'root','','softwareticket') or die ('no se pudo conectar a la base de datos'. 
        mysqli_error($conn));       
?>
