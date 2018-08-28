<?php
function confirm($parameter){
    global $connection;
    if (!$parameter){
        die("Error ---> " .mysqli_error($connection));
    }
}

function escape($string){
    global $connection;
    return mysqli_real_escape_string($connection, trim($string));
}

function catchr($p){
    $vari = $p;
    return $vari;
}

?>