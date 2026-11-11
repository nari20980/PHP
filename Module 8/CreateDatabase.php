<?php

$host="localhost";
$user="root";
$pass="";


try{
$conn=new PDO("mysql:host=$host",$pass,$user);
$sql="Create database nar";
$conn->exec($sql);
echo "database is created";
}catch(Exception $e){
    echo "Database is not created";
}

?>