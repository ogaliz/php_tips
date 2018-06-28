<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Prueba conexión BD Mysql</title>
</head>

<body>

<?php
    #1. creamos las variables con los datos de conexion.
    $db_host = "localhost";
    $nombre = "curso_php";
    $db_usuario = "root";
    $db_contra = "";
    
    #2. creamos la variable conexion:
    $conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$nombre);
    
    #3. creamos nuestra consulta.
    $consulta = "select * from datospersonales";
    
    #4. ejecutamos la consulta con la funcion que nos pide dos param.
    $resultados = mysqli_query($conexion, $consulta);
    
    #5. guardamos el resultset (o tabla resultado) en un array resultante.
    $fila = mysqli_fetch_row($resultados);
    
    #6. Mostramos los primeros 4 resultados del array.
    echo $fila[0]." ";
    echo $fila[1]." ";
    echo $fila[2]." ";
    echo $fila[3]." ";
?>

</body>

</html>
