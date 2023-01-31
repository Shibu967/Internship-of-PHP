<?php

function Test(&$a){
    $a="Hey";


}
$str="Hello";
Test($str);
echo $str;