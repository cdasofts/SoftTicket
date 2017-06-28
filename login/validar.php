<?php

session_start();

//verificar que el formulario se haya mandado 
if (isset($_POST['usuario']) and isset($_POST['password'])) {
    //si se mandó el formulario, consultar bd (utilizando una herencia 'include')
    include ('../db/conexion.php');
    //práctica de seguridad para para evitar ataques tipo injection
    $nombredeusuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    //consultar a bd para ver si los datos corresponden a un registro 
    $comprobacion_nombre = 'select * from cdusuarioscliente where cUsuario = "' . $nombredeusuario . '"';
    //objetos, lo que hace es ejecutar la consulta
    $comprobacion = $conn->query($comprobacion_nombre);
    //objeto para ver si se obtuvo resultados, con una condición 
    if ($comprobacion->num_rows > 0) {
        //consulta contraseña de usuario
        $consulta_bd = mysqli_query($conn, 'select cContrasena from cdusuarioscliente where cUsuario = "' . $nombredeusuario . '"'); 
        //funcion para recoger dato
        $recoger_dato = mysqli_fetch_assoc($consulta_bd);
        //si hay más de 0 resultados se comprueba la contraseña
        $comprobar_password = password_verify($password, $recoger_dato['cContrasena']);
        //saber si la contraseña es correcta 
        if ($comprobar_password) {
            //variable de sesion 
            $_SESSION['cUsuario'] = $nombredeusuario;
            header('location: ../index.php');
        } else {
            print 'Los datos han sido incorrectos <br> <a href="./">Volver</a>';
        }
    } else {
        print 'Usuario o contraseña incorrectos <br> <a href="./">Volver</a>';
    }
} else {
    //redireccionar a la pagina de inicio 
    header('location: ../index.php');
}
?>

