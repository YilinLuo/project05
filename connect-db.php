<?php
// Database Variables (edit with your own server information)
$server = 'localhost';
$user = 'urcscon3_london';
$pass = 'coffee1N/21!';
$db = 'urcscon3_london';

// $server = 'localhost';
// $user = 'project04_london';
// $pass = 'coffee';
// $db = 'project04_london';

// Connect to Database
$connection = mysqli_connect($server,$user,$pass,$db);

$query  = "SELECT * FROM students";
$result = mysqli_query($connection, $query);

if (!$connection) 
{
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>