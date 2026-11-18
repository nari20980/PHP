<?php



$host="localhost";
$dbname="nar";
$user="root";
$pass="";


try{

    $conn= new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    echo "connected";
}catch(exception $e){
    echo "not connected";


}


?>