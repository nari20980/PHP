<?php

$my_file=feof("idk.txt","r");

while(!feof($my_file)){
    echo fgets($my_file) . "<br>";
}
fclose("idk.txt")
?>