<?php

$Chost = "mdb-test.c6vunyturrl6.us-west-1.rds.amazonaws.com";
$Cuser = "bsale_test";
$Cpas  = "bsale_test";
$Cdb   = "product"; //Nombre de la base de datos

$con = new mysqli($Chost,$Cuser,$Cpas,$Cdb);

if ($con->connect_errno) {
    die("Ha ocurrido un error");
}

?>