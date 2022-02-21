<?php
$mysqli = new mysqli("localhost", "root", "", "dbtest");
if($mysqli->connect_error)
    die('Error when connecting to DB.');
?>