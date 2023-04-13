<?php
$host = "localhost";
$uname = "App";
$password = "App@FilmTrivia";
$dbname = "filmtrivia2";

$conn = new mysqli($host, $uname, $password, $dbname);
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 ?>
