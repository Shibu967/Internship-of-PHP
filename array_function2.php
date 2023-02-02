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
// }
$arr2= array_chunk($arr,2);
echo"<pre>";
print_r($arr2);
echo"</pre>";

