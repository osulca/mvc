<?php
use App\Clases\Facultad as Facultad;
include_once "includes/autoload.php";

include_once "App/vistas/uCrear.php";

$a = new Facultad();
$b = new App\Clases\PA();
$c = new App\Clases\Usuario();
$ca = new App\Controladores\ControladorFacultad();
$cb = new App\Controladores\ControladorPA();
$cc = new App\Controladores\ControladorUsuario();
