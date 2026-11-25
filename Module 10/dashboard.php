<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th{
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<?php
include_once("connection.php");

$sql="select * from user ";
$getuser=$conn->prepare($sql);
$getuser->execute();
$user=$getuser->fetchAll();
?>

<h2>Users</h2>

<table>
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>


    </tr>
    <?php
    foreach($user as $user){
        echo "<tr>";
        echo "<td>". $user['id']. "</td>";
        echo "<td>". $user['username']. "</td>";
        echo "<td>". $user['password']. "</td>";
        echo "</tr>";
    }


    ?>



</table>
<br>
<a href="index.php">add users</a>
    
</body>
</html>