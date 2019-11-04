<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasar contenido de un checkbox</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php
    if (isset($_POST['todoscur'])){
    echo $_POST['todoscur'];
}
?>

<form name="form22" method="POST" action="">
    <label class="pure-material-checkbox">
        <input type="checkbox" name="todoscur" value="todoscur">
        <span>Mostrar Todos</span>
    </label>
    <input type="submit" value="Mostrar">
</form>

<br>
<hr>

<form name="form22" method="POST" action="">
    <label class="pure-material-checkbox">
        <input type="checkbox" name="todoscur" value="todoscur" onchange="this.form.submit()">
        <span>Mostrar Todos</span>
    </label>
</form>

</body>
</html>