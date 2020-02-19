<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="collapse" id="collapseForm">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="codigo">Código</label>
                <input id="codigo" type="text" name="codigo" class="form-control" placeholder="ABC">
            </div>
            <div class="form-group col-md-6">
                <label for="descr">Descripción</label>
                <input id="descr" type="text" name="descripcion" class="form-control" placeholder="Barcelona">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="chl7">CódigoHL7</label>
                <input id="chl7" type="text" name="codigoHL7" class="form-control" placeholder="CDEBCN">
            </div>
            <div class="form-group col-md-6">
                <label for="dhl7">DescripciónHL7</label>
                <input id="dhl7" type="text" name="descripcionHL7" class="form-control" placeholder="Dexeus Mujer...">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="activo">Activo</label>
                <select id="activo" name="activo" class="form-control">
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="direccion">Dirección</label>
                <input id="direccion" type="text" name="direccion" class="form-control" placeholder="Gran Via Carles III, 71-75">
            </div>
            <div class="form-group col-md-4">
                <label for="cpostal">Código postal</label>
                <input id="cpostal" type="text" name="codigoPostal" class="form-control" placeholder="08028">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="icono">Icono</label>
                <input id="icono" type="text" name="icono" class="form-control" placeholder="570">
            </div>
            <div class="form-group col-md-5">
                <label for="dbreve">Descripción breve</label>
                <input id="dbreve" type="text" name="descripcionBreve" class="form-control" placeholder="BCN">
            </div>
            <div class="form-group col-md-5">
                <label for="idliteral">ID Literal</label>
                <input id="idliteral" type="text" name="idLiteral" class="form-control" placeholder="1001627">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tele">Teléfono</label>
                <input id="tele" type="text" name="telefono" class="form-control" placeholder="93 111 11 11">
            </div>
            <div class="form-group col-md-6">
                <label for="fax">Fax</label>
                <input id="fax" type="text" name="fax" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Añadir</button>

    </form>

    <?php

        echo "<br><br>";
        print_r($_POST);
        echo "<br><br>";
        echo $_POST["codigo"];
        echo "<br><br><br>";
        echo $_POST["activo"];

        /*for ($i = 0; $i < 10; $i++){
            echo "</h3>" .  . "</h3><br>";
        }*/

    ?>

</body>
</html>

