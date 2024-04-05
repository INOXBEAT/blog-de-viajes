<?php

$conex = mysqli_connect("localhost", "root", "", "blog_viajes");

if (!$conex) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

?>
