<?php
$arr=array(
    "Name"=>"Shibu Kumari",
    "Age"=>21,
    "Email_id"=>"shibu@gmail.com",
    "Roll_No"=>190570107146,
    "college"=>"Marwadi university"
);
// foreach($arr as $key=>$value){
//     echo $key .":". $value;
//     echo "</br>"; 
    print_r(array_change_key_case($arr,CASE_UPPER));
    echo "<br>";
    print_r(array_change_key_case($arr,CASE_LOWER));


?>