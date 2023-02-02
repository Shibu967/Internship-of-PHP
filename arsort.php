<?php
$salary=array(
    "shibu"=>50000,
    "sonu"=>20000,
    "vipul"=>10000,
    "simran"=>1000000);
    arsort($salary);

foreach($salary as $key=>$value){
    echo $key .":". $value;
    echo "</br>"; 
}
?>

//sort associative arrays in descending order, according to the value