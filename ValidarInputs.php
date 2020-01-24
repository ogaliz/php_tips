<?php


class ValidarInputs
{

    public static function validaEmail($email){

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $email . ' is VALID' . '<br>';
        } else {
            echo $email . ' is NOT VALID' . '<br>';
        }
    }

}

ValidarInputs::validaEmail('hola@email.es');
ValidarInputs::validaEmail('hola@email.comcom');
ValidarInputs::validaEmail('hola11111111111111111111111@emai222222222222222222222222222222l.es');
ValidarInputs::validaEmail('hola@@email.es');

?>