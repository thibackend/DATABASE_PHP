<?php
function connect_db(){
    $sql =mysqli_connect("localhost","root","");
    if(!$sql){
        die("connection failed: ". mysqli_connect_error());
    }else(
        echo '<script>alert("thanh cong")</script>'
    )
}
connect_db();



?>