<?php
$servername = "sql12.freesqldatabase.com";
$username = "sql12761433";
$password = "JsW8TZdP62";
$dbname = "sql12761433";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
