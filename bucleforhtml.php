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

    <table>
        <tr>
            <?php
                for ($i = 0; $i < 3; $i++){
                    echo '<td>111</td>';
                }
            ?>
        </tr>
        <?php
        if(false) {
            echo '
               <tr>
                    <td>111</td>
                    <td>222</td>
                </tr>
            ';
        }
        ?>
    </table>

</body>
</html>