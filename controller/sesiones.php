<?php
session_start();
	require_once "../model/ValidacionClass.php";

	echo $user = trim($_REQUEST['usuario']);
	echo $pass = trim($_REQUEST['password']);

	$validacion = new Validacion();
	$data = $validacion->ValidacionCuenta($user,$pass);

	if($data['niv_usu'] == 1){
	    $_SESSION['administrator'] = $data['cod_usu'];
	    header("Location: ../view/index.php");
	}
	else
	{
	    header("Location: ../login.html");
	}

?>