<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT']=('../Modelo/Bo/usuarioBo.php');

switch ($_POST['action']) {
	case "logout":  
		$bo = new usuarioBo();
		$r = $bo->logoutBo();
		print $r;      
		break;
}