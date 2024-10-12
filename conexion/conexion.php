<?php
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO alumno (nombre, genero, edad, ncontrol, grupo, especialidad) 
                VALUES (:nombre, :genero, :edad, :ncontrol, :grupo, :especialidad)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':ncontrol', $ncontrol);
        $stmt->bindParam(':grupo', $grupo);
        $stmt->bindParam(':especialidad', $especialidad);
        
        $stmt->execute();
        
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='../sytles/style.css' />
            <title>Registro Completado</title>
        </head>
        <body>
            <h1 id='titulo-respuesta'>El registro se ha completado exitosamente</h1>
            <a href='../index.html'>Regresar al formulario</a>
        </body>
        </html>";

    } catch (PDOException $e) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='sytles/style.css' />
            <title>Registro Completado</title>
        </head>
        <body>
            <h1 id='titulo-respuesta'>Hubo un error en el proceso </h1>
            <a href='../index.html'>Regresar al formulario</a>
        </body>
        </html>";
        echo "<br>";
        echo "<h2>Error en la conexión: " . $e->getMessage() . "</h2>";

    }
?>