<?php 

#1. creamos las variables con los datos de conexion.
$db_host = "localhost";
$nombre = "curso_php";
$db_usuario = "as";
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
// $sql = 'AgendaMedica_SEL_DatosUsuario @usuario = "OSCRUI"';
// $stmt = $conn->query($sql);
// do {
//    $rows = $stmt->fetchAll(PDO::FETCH_NUM);
//    if ($rows) {
//        echo $rows;
//    }
// } while ($stmt->nextRowset());



?>