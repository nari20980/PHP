<?php
include_once ('connection.php');


if(isset($_POST['username'],$_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    echo "<br>". "Username :". $username ."<br>";
    echo "password :". $password;
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
    
<form method="post">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <input type="submit" name="submit" value="submit">

</form>

</body>
</html>