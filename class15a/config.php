<?php
$hostname = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fahad";

$conn = mysqli_connect($hostname,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("Error". mysqli_connect_error($conn));
}else{
    //echo "Connect Successfully";
}