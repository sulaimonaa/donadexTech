 <?php

$servername = "ns33.qservers.net";
$username = "donadext";
$password = "K790Ptuic6";
$database = "donadext_donadexmain";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 