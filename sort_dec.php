<?php
$number=array(34,67,89,56,90);
rsort($number);
$len=count($number);
for($i=0;$i<=$len;$i++){
  echo $number[$i];
  echo "<br>";  
}
?>