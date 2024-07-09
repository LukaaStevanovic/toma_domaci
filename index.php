<?php

//zadatak 1. #4 - Conditional statement
/*$ime = "administrator";
$lozinka = "mojaSifraJeSigurna";

if(strtolower($ime) && $lozinka == "mojaSifraJeSigurna"){
    echo "Dobrodosao administratore";
}*/


//zadatak 2. #4 - Conditional statement
// jutro 5-12; podne 12-20; noc 20-5
$trenutno_vreme = date("H");

if($trenutno_vreme >= 5 && $trenutno_vreme < 12){
    echo "Jutro jee";
}elseif($trenutno_vreme >= 12 && $trenutno_vreme < 20){
    echo "Evo ga podne";
}else{echo "Sad je noc";}