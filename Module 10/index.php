<?php

include_once ('connection.php');

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="insert into user (username,password)
    values(:username,:password)";

    $sqlQuery=$conn->prepare($sql);
    $sqlQuery->bindParam(':username',$username);
    $sqlQuery->bindParam(':password',$password);
    $sqlQuery->execute();
    echo "data save successfully";

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
<a href="dashboard.php">dashboard</a>
<form method="post" action="add.php">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <input type="submit" name="submit" value="submit">

</form>

</body>
</html>