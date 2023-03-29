<?php

$a = 0;
$b = 10;

for ($i=$a; $i<$b; $i++) {
    echo "Perulangan ke-".$i."<br>";
}

$buah = array("Apel","Jeruk","Salak","Mangga",'Duren',"Manggis","Anggur","Duku","Strawberry","Buah Naga");
foreach ($buah as $nval) {
    echo "Buah : " . $nval . "<br>";
}