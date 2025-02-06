<?php
$servername = $url["sql12.freesqldatabase.com"];
$username = $url["sql12761433"];
$password = $url["JsW8TZdP62"];
$dbname = $url["sql12761433"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
