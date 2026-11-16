<?php
try{
$conn=new PDO("mysql:host=localhost; dbname=nar","root","");

$sql="ALTER table user drop email varchar(255)";

$conn->exec($sql);
echo "column dropped";

}catch(Exception $e){
    echo "column not dropped";
}

?>