<?php 


$x=8;
function sum(){
    global $y, $x;
    $y=5;
    echo $y+$x . "<br>";

}
sum();
echo $y. "<br>";
?>