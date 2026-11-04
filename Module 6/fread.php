

<?php

$my_file=fopen("idk.txt","r");

echo fread($my_file,filesize("idk.txt"));
fclose($my_file);
?>