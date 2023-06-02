<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$host = "localhost";
$user = "dam";
$password = "dambd08";
$dbname = "prol_axenda";

// crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}