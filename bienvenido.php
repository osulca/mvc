<?php
session_start();
if($_SESSION["estado"]!="ok"){
    header("location: index.php");
}

switch ($_SESSION["tipo"]){
    case "profesor":
        echo "Profesor
              <li><a href='#'>Ver Cursos a Cargo</a></li>";
        break;
    case "estudiante":
        echo "Estudiante
              <li><a href='#'>Ver Notas</a></li>
              <li><a href='#'>Matricula</a></li>";
        break;
    case "administrador":
        echo "Administrador
              <li><a href='#'>Crear Usuarios</a></li>
              <li><a href='#'>Crear Plan de Estudios</a></li>
              <li><a href='#'>Asignar Cursos</a></li>";
        break;
}
echo "<li><a href='logout.php'>Salir</a></li>";

echo "<h1>Hola ".$_SESSION["nombres"]."</h1>";
echo "Usted es un ".$_SESSION["tipo"];
