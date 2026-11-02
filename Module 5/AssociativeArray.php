<?php

$grade= array(
    "Math"=>"5",
    "Gjuhe"=>"3",
    "Anglisht"=>"2"
);

foreach($grade as $subject => $grade){
    echo "Subject :". $subject . "Grade :". $grade. "<br>" ;
}


?>