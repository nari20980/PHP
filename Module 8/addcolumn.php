<?php
try{
$conn=new PDO("mysql:host=localhost; dbname=nar","root","");

$sql="ALTER table user add contact int(255)";

$conn->exec($sql);
echo "column created";

}catch(Exception $e){
    echo "column not created";
}

?>