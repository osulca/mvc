<?php
include_once "Facultad.php";

class ControladorFacultad
{
    public function guardar(String $nombre): void{
        $facultad = new Facultad();
        $facultad->setNombre($nombre);
        $filas = $facultad->insertar();

        if($filas!=0){
            echo "Facultad guardada";
        }else{
            echo "Error: Informarcion no guardada";
        }
    }
}