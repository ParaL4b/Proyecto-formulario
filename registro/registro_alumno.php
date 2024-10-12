
<?php
    $host = 'localhost';
    $dbname = 'appformulario';
    $username = 'root';
    $password = 'root';

    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];
    $edad = $_POST['edad'];
    $ncontrol = $_POST['ncontrol'];
    $grupo = $_POST['grupo'];
    $especialidad = $_POST['especialidad'];
    
    include '../conexion/conexion.php'
?>