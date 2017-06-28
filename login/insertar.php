<?php
//estructura de control para conprobar que se han mandado los datos 
if(isset($_POST['usuario']) and isset($_POST['password'])){
    include '../db/conexion.php';
    $nombre_u = mysqli_real_escape_string($conn,$_POST['nombre']);
    $app_usu = mysqli_real_escape_string($conn,$_POST['apellidos']);
    $fecha_u = mysqli_real_escape_string($conn,$_POST['fecha']);
    $nombre_usuario = mysqli_real_escape_string($conn,$_POST['usuario']);
    //encriptar la contraseña
    $password = password_hash ($_POST['password'],PASSWORD_DEFAULT); 
    $repPass = password_hash ($_POST['repassword'],PASSWORD_DEFAULT);
    $estado = mysqli_real_escape_string($conn,$_POST['estado']);
    $ciudad = mysqli_real_escape_string($conn,$_POST['ciudad']);  
    $correo = mysqli_real_escape_string($conn,$_POST['correo']);
    $celular = mysqli_real_escape_string($conn,$_POST['celular']);
    
    //insertar los datos en la base de datos 
    $insertar=mysqli_query($conn,'insert into cdusuarioscliente (cNombreUsuario, cAppUsu, dFechaNac, cUsuario, cContrasena, '
            . 'cRepContrasena, eIdEstado, eIdCiudad, cCorreo, cCelular) value '
            . '("'.$nombre_u.'","'.$app_usu.'","'.$fecha_u.'" ,"'.$nombre_usuario.'","'.$password.'","'.$repPass.'","'.$estado.'",'
            . '"'.$ciudad.'","'.$correo.'","'.$celular.'" )') or die ('No se pudo registrar<br>'. mysqli_error($conn));
    //cerrar conexion a bd
    mysqli_close($conn);
    //redireccionar usuario a pagina de login
    header('location: ../index.php');
}else{
    //redirecciona 
    header('location: ../index.php');
}
?>


