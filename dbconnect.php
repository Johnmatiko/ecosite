<?php
//Khoi Hoang - Team 3.

//Connect to database.
$DBcon = new mysqli("localhost", "root", "toor", "db_nisc");

if ($DBcon->connect_errno) {
    die ("Error: ". $DBcon->connect_error);
}
?>