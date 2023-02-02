<?php
$salary=array(
    "shibu"=>50000,
    "sonu"=>20000,
    "vipul"=>10000,
    "simran"=>1000000);
    krsort($salary);

foreach($salary as $key=>$value){
    echo $key .":". $value;
    echo "</br>"; 
}
?>