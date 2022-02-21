<?php
include_once("db.php");
global $mysqli;
$query = "CREATE TABLE Images (
    ImageID int,
    Name varchar(255),
)";
$res = $mysqli->query($query);
