<?php

//assosciative array
//model 1
$age = array("Leo"=>"19","Nanda"=>"21","Peter Parker"=>"30");

//print_r($age);

//model 2
//$age['Leo'] = "19";
//$age['Nanda'] = "21";
//$age['Peter'] = "30";

//echo "Umur saya adalah".$age['Peter'];

foreach($age as $p => $u){
    echo $p . " Umurnya " . $u;
    echo "<br>";
}