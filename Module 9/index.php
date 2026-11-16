<?php
include_once("connection.php");


if(isset($_POST['$username'],$_POST['password'])){
    $username=$_POST['username'];
    $username=$_POST['password'];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">



    <label for ="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for ="Password">Password:</label>
    <input type="text" id="Password" name="Password">

    <input type ="submit" value="submit">

</form>
    
</body>
</html>