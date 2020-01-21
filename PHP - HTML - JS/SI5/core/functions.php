<?php
    function debug($variable){
        echo '<pre>' . print_r($variable, true) . '</pre>';
    }

    function generateToken($lenght){
        $values= "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN-";
        return substr(str_shuffle(str_repeat($values, $lenght)), 0, $lenght);
    }
?>
