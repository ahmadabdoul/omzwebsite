<?php

$servername = 'localhost';
$username = "root";
$password = "";
$dbname = "omzfield";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error connecting to mysql server ".mysqli_error($conn));
