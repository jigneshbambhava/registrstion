<?php
$con = new mysqli('localhost', 'root', 'jigneshbambhava', 'mydb');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
