<?php
//multidimensional

$mhs = array(
    array("nama"=>"Capten Amerika","Id"=>"1122334455","Add"=>"New York"),
    array("nama"=>"Black Panther","Id"=>"2233445566","Add"=>"Wakanda"),
    array("nama"=>"Ant man","Id"=>"3344556677","Add"=>"Quantum realm"),
    array("nama"=>"Roronoa Zoro","Id"=>"301.000.000","Add"=>"Wanokuni"),
);
foreach($mhs as $idx => $dta){
    echo "Data ke-" .$idx."<br>";
    foreach($dta as $b=>$nval){
        echo $b." : ".$nval. "<br>";
    }
    echo "<br>";
}