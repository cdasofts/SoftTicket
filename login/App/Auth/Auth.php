<?php

class Auth {
    //validación, que servicion se van a permitir en la app 
    protected static $allow = ['Facebook', 'Google'];

    //metodo, revisa que el servicio que se manda sea valido
    protected static function issetRequiest() {
        //verificar si se está mandando la petición el dato login
        if (isset($_GET['login'])) {
            //revisar el dato que se está enviando, si pertenece al arrglo
            if (in_array($_GET['login'], self::$allow)) {
                return true;
            }
        }
        return false;
    }

    //metodo, se va a llamar una vez que el callback revuelva la solicitud (cuando el usuario de los permisos de la app)
    public static function getUserAuth() {
        if (self::issetRequiest()) {
            $service = $_GET['login'];
            $hybridauth = new Hybrid_Auth(__DIR__ . '\config.php');
            $adapter = $hybridauth->authenticate($service);

            //recuperar ususario
            $userProfile = $adapter->getUserProfile();

            //llamar el metodo princial
            self::storeUser($service, $userProfile);

            //redireccionar
           header('location: index.php');
            //var_dump($userProfile);

            //die();
        }
    }

    //funcion para revisar que el usuario no exista en la bd 
    protected static function storeUser($service, $socialUser) {
        //crear estancia a la base de datos 
        $db = new PDO("mysql: host=localhost; dbname=softwareticket", "root", "");
        //revisar si el usuario ya existe en la bd
        $user = self::getExistingUser($socialUser, $db);
        if ($user == null) {
            //si usuario es null se crea nuevo usuario 
            $user = array(
                'cNombreUsuario' =>$socialUser->firstName,
                'cAppUsu' =>$socialUser->lastName,
                'cCorreo' => $socialUser->email
            );
            $ps = $db->prepare("INSERT INTO cdusuarioscliente (cNombreUsuario,cAppUsu,cCorreo) VALUES (:cNombreUsuario, :cAppUsu, :cCorreo)");
            $ps->execute($user);
            //se recupera el último id que se creó
            $user['eIdUsuarioClie'] = $db->lastInsertId();
            self:: storeUserSocial($user, $socialUser, $service, $db);
        } else {
            if (!self::checkUserSocialService($user, $socialUser, $service, $db)) {
                self:: storeUserSocial($user, $socialUser, $service, $db);
            }
        }

        self::login($user);
    }

    //metodo para ver si existe el usuario en la bd
    protected static function getExistingUser($socialUser, $db) {
        //consulta preparada
        $ps = $db->prepare("SELECT eIdUsuarioClie, cNombreUsuario, cCorreo FROM cdusuarioscliente WHERE cCorreo = :cCorreo");
        //se ejecuta la consulta
        $ps->execute([
            ':cCorreo' => $socialUser->email
        ]);
        $result = $ps->fetchAll(PDO::FETCH_ASSOC);
        //comprobar, si result está vacía entonces se retorna null
        return $result ? $result[0] : null;
    }

    //metodo para almacena el usuario social 
    protected static function storeUserSocial($user, $socialUser, $service, $db) {
        $ps = $db->prepare("INSERT INTO ceusuariosocial (eIdUsuarioClie,redSocial,service) VALUES (:eIdUsuarioClie,:redSocial,:service)");
        $ps->execute([
            ':eIdUsuarioClie' => $user['eIdUsuarioClie'],
            ':redSocial' => $socialUser->identifier,
            ':service' => $service
        ]);
    }
    //metodo para ver si existe un usuario 
    protected static function checkUserSocialService($user, $socialUser, $service, $db) {
        $ps = $db->prepare("SELECT * FROM ceusuariosocial WHERE eIdUsuarioClie = :eIdUsuarioClie AND service = :service AND redSocial = :redSocial");
        $ps->execute([
            ':eIdUsuarioClie' => $user['eIdUsuarioClie'],
            ':service' => $service,
            ':redSocial' => $socialUser->identifier
        ]);
        //revisar si se retorna un registro, si hay un registro lo retorna true, else false
        return (bool) $ps->fetchAll(PDO::FETCH_ASSOC);
    }

    //funcion para comprobar si el usuario ya está logeado en el sistema 
    public static function isLogin() {
        return (bool) isset($_SESSION['user']);
    }

    //funcion para loguearse
    protected static function login($user) {
        $_SESSION['user'] = $user;
    }

//funcion para cerrar sesion 
    public static function logout() {
        if (self::isLogin()) {
            unset($_SESSION['user']);
        }
    }

}
?>

