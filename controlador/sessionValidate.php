<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT']=('../Modelo/Bo/usuarioBo.php');

$bo = new usuarioBo();
$r = $bo->sessionValidateBo();
