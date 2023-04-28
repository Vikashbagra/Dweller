<?php 

$Server = "localhost";
$username = "root";
$password =  "";
$db = "dweller";


$conn = mysqli_connect($Server,$username,$password,$db);
if(!isset($conn)){
    echo "Database Error :".mysqli_connect_error();
}
?>