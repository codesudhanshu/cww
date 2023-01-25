<?php

$server = "localhost";
$username = "root";
$password ="";
$databasename ="login";

$conn = mysqli_connect($server, $username, $password, $databasename);
if($conn){
"success";
}
else{
    die("error".mysqli_connect_error());
}


?>
