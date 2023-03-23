<?php 
require_once "../../connect_db/connect_db.php";
$mysql =connect_db_name('demo');

$query="CREATE TABLE Persons(
    id int,
    name varchar(200),
    age int,
    address varchar(200),
    primary key(id))";
$mysql->query($query);
$mysql->close();
?>