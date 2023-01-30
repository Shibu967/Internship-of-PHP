<?php
$marks=90;
if($marks<30){

    echo" fail";
}
else if($marks>30 && 50>$marks){
    echo "D grade";
}
else if($marks>50 && 60>$marks){
    echo "C grade";
}
else if($marks>60 && 80>$marks){
    echo "B grade";
}
else if($marks>80 && 100>=$marks){
    echo "A grade";
}
else {    
    echo "Invalid input";
}    






?>