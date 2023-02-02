<?php
$number=array(10,45,89,45,23);
sort($number);


$clength = count($number);
// echo "$clength";
for($x = 0; $x < $clength; $x++) {
    echo $number[$x];
    echo "<br>";
}

?>