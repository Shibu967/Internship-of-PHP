<?php
function Marks($is,$cd,$cc,$ml,$ai){
    $s=$is+$cd+$cc+$ml+$ai;
    return $s;



}




function Percentage($s){

    $p=$s/5;
    echo "$p.%";
}

$total=Marks(40,50,60,70,71);
Percentage($total);