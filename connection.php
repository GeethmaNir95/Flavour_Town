<?php

$servername ="localhost";
$dbname ="flavour_town";
$username ="root";
$password="";

//create connection
$conn = mysqli_connect("localhost","root"," ","flavour_town",3307);

//check connection

if(!$conn){

    die("Connection failed: ".$conn ->connect_error);
}


?>