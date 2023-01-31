<?php
function testing(&$string){

    $string.="and something extra.";
}
$str="this is a string";
testing($str);
echo $str;

?>