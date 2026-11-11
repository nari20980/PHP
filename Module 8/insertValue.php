<?php
try{
$conn=new PDO("mysql:host=localhost; dbname=nar","root","");

$name="oltiona";
$password=password_hash("TestTest",PASSWORD_DEFAULT);

$sql="Insert into users (name,PASS) values ('$name','$password')";
$conn->exec($sql);
echo "Insert succesfully";
}catch(Exception $e){
    echo "insert not succesfully";
}
?>