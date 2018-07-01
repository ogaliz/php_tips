<?php

/*Ejercicio en el que conectaremos con una base de datos mysql utilizando POO*/

#1. Establecemos la conexion
$conexion = new mysqli("localhost","root","","curso_php");

#Respuesta del programa si la conexion no tiene exito:
if($conexion->connect_errno){
    
    echo "fallo la conexion $conexion->connect_errno .";
}
   
//mysqli_set_charset($conexion ,"utf-8");

$conexion->set_charset("utf-8");

$sql = "select * from datospersonales";

$resultados = $conexion->query($sql);

#comprobar si la consulta sql pudiera estar mal escrita.

if($conexion->errno){
    die($conexion->error);
}

//while($fila = mysqli_fetch_array($resultados, MYSQL_ASSOC)){

#Mostramos la información en una tabla.
while($fila = $resultados->fetch_assoc()){
    
    echo "<table><tr><td>";
    
    echo $fila['NIF'] . '</td><td>';
    echo $fila['nombre'] . '</td><td>';
    echo $fila['apellido'] . '</td><td>';
    echo $fila['edad'] . '</td></tr></table>';
    
}

#cerramos la conexion
$conexion->close();

?>