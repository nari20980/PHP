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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODULE 9 </title>
</head>
<body>
    
<form method="post" action="add.php">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <input type="submit" name="submit" value="submit">

</form>

</body>
</html>