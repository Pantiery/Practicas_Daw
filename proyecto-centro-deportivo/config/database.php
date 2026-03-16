<?php

$conexion = new mysqli("localhost", "root", "", "centro_deportivo");

if ($conexion->connect_error) {
    die("Error de conexión");
}