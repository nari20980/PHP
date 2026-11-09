<?php

$host="localhost";
$user="root";
$pass="";
$DBname="IdkIdk";



try{
$conn=new PDO("mysql:host=$host;DBname=$DBname",$pass,$user);
echo "Connected";
}catch(Exception $e){
    echo "Not connected";
}

?>