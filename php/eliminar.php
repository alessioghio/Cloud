<?php
session_start(); // Iniciar función de variables globales
require_once('mysqli_connect.php'); // Conetar a la base de datos

$idusuario = $_SESSION["idusuario"];

if  ($_GET) {
        $id = $_GET;
        $idd = implode($id); //convertir el array en un string

        $sql3 = "DELETE FROM Archivos WHERE idarchivos = $idd and Usuario_idusuario = $idusuario"; //Función de MYSQL
        $dbc->query($sql3); //Ejecutar función en la base de datos
        header("Location: ../archivos.php"); //Redireccionar a archivos.php
    }


?>
