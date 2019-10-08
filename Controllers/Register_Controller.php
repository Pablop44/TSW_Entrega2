<!--
Documento php que contiene el código php que controla las funcionalidades y el comportamiento de la vista register.
Víctor Busto
02/10/2019
-->
<?php

session_start();
//session_start();
if(!isset($_POST['login'])){
	include '../Views/Register_View.php';
	$register = new Register();

	}else{
		include '../Models/Access_DB.php';
		include '../Models/USUARIOS_Model.php';
        $usuario = new USUARIOS_Model($_POST['login'],$_POST['password'],$_POST['nombre'],$_POST['apellidos'],$_POST['email'],$_POST['uso']);
		$respuesta = $usuario->Register();

		if ($respuesta == 'true'){
			$respuesta = $usuario->registrar();
			Include '../Views/MESSAGE_View.php';
			new MESSAGE($respuesta, './Login_Controller.php');

		}else{

		include '../Views/MESSAGE_View.php';
		new MESSAGE($respuesta, './Login_Controller.php');
	}

}
?>

