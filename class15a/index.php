<?php 
require_once("config.php");


$fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : NULL;
$emailaddress = isset($_POST["emailaddress"]) ? $_POST["emailaddress"] : NULL;
$cellnumber = isset($_POST["cellnumber"]) ? $_POST["cellnumber"] : NULL;


if(isset($_POST["sub"])){
    $sql = "INSERT INTO student(fullname,email,phone) VALUES('$fullname','$emailaddress','$cellnumber')";

$result = mysqli_query($conn,$sql);

if($result == TRUE){
    echo "data Gese";
}else{
    echo "vul val kaj korsen";
}
}



?>

<form action="?" method="post">
    <label>Name : </label><br>
    <input type="text" name="fullname"  required><br>
    <label>Email : </label><br>
    <input type="email" name="emailaddress"  required><br>
    <label>Cell : </label><br>
    <input type="text" name="cellnumber"  required><br>
    <input type="submit" value="SUBMIT" name="sub">
</form>