<?php

require_once("config.php");

$sqlshow = "SELECT * FROM student";

$resultshow = mysqli_query($conn,$sqlshow);

foreach($resultshow as $key => $value){
    echo $value['fullname']. "<br>";
    echo $value['email']. "<br>";
    echo $value['phone']. "<br>" ."<br>"."<br>";
}


