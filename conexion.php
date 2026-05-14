<?php

function conectar(){

$mysqli = new mysqli("localhost:3306", "root", "", "db_stargud");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


return $mysqli;

}