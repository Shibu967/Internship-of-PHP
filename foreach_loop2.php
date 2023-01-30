<?php
$employee=array(
    "First_name"=>"Shibu",
    "Last_name"=>"kumari",
    "Email_id"=>"shibu@123gmil.com",
    "Age" => 21,  
    "Gender" => "female" 
);
foreach ($employee as $key => $value) {

    echo $key.":".$value;
    echo "<br>";

}


?>
