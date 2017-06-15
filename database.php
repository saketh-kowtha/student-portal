<?php
session_start();
function connect()
{
// Create connection
$_SESSION["connection_student"] = new mysqli("host", "name", "passwd",'db_name');

// Check connection
if ($_SESSION["connection_student"] ->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    return 1;
} 
return 0;
}
?>