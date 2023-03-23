<?php
$nameServer = "localhost";
$username = "root";
$pwd = "";
$dbname ="demo";
$conn = mysqli_connect($nameServer,$username,$pwd,$dbname);
if(!$conn){
    die("connect Failed: ".mysqli_connect_error());
}
?>