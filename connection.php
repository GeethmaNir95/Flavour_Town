<?php

$servername ="localhost";
$dbname ="flavour_town";
$username ="root";
$password="";

//create connection
$conn = mysqli_connect("localhost","root","","flavour_town");

//check connection

if(!$conn){

    die("Connection failed: ".$conn ->connect_error);
}


?>
