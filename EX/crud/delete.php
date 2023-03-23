<?php
include "conn.php";
$id = $_GET["id"];

$sql = "DELETE FROM Person WHERE id=$id;";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: index.php");
}else{
    echo "failed delete".mysqli_error($conn);
}
?>