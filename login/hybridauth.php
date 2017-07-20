 <?php 
//donde la api de la red social va a redireccionar la aplicacion

	require_once ('vendor/autoload.php');

	////condición para cuando la pagina direccione, si existe la peticion
	if (isset($_REQUEST['hauth_start']) || isset($_REQUEST['hauth_done'])){
		//procesar la peticion 
		Hybrid_Endpoint::process();
	}

 ?>