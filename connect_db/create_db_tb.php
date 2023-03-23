<?php
require_once "connect_db.php";

$mysql =connect_db_name("demo");

$query ="CREATE TABLE Products(
    id int primary key,
    name varchar(100),
    age int,
    address varchar(200))";

if($mysql->query($query) == TRUE){
    echo" Sucessful create table";
}else {
    echo "can't create has error!";

}

?>