<?php

$host="localhost";
$user="root";
$pass="";
$DBname="nar";

try{
    $conn=new PDO("mysql:host=$host;dbname=$DBname",$pass,$user);
    $sql="Create Table users (id INT(6) not null auto_increment primary key,
    username varchar(30) not null,
    password varchar(30) not null)";

    $conn->exec($sql);

echo "Table is created";
}catch(Exception $e){
    echo "Table is not created";
}

?>