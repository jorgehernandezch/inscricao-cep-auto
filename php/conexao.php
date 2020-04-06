<?php
    $host = "127.0.0.1"; 
    $puerto = "3306"; // Puerto del servidor MySQL
    $usuario = "root"; // Nombre de usuario del servidor MySQL 
    $contrasena = "root"; // Contraseña del usuario
    $baseDeDatos = "inscricao_cep"; // Nombre de la base de datos
    function Conectarse()
    {
        global $host, $puerto, $usuario, $contrasena, $baseDeDatos;
        if (!($link = mysqli_connect($host, $usuario, $contrasena, $baseDeDatos))) { 
            //echo "<strong>Estado de Conexão:</strong><span> Error conectando a la base de datos.</span><br>"; 
            exit(); 
        }
        else{	
            if (!mysqli_select_db($link, $baseDeDatos)){ 
                //echo "<strong>Estado de Conexão:</strong><span> Error seleccionando la base de datos.</span><br>"; 
                exit(); 
            }
            else{
                //echo "<strong>Estado de Conexão:</strong><span> Online</span><br>";
                //echo "<strong>Base de Datos:</strong><span> $baseDeDatos</span>";
            }
        }
        return $link; 
    } 
?>