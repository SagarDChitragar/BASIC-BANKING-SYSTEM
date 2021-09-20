<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "SagarBank";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {

  die("connection failed due to " . mysqli_connect_error());
}
