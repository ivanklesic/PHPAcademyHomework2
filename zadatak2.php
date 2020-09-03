<?php

CONST STARTING_POSITION = 12;
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$arrayAlphabet = explode(',', $alphabet);
$rows = sizeof($arrayAlphabet);


for($i = 0; $i < $rows; $i++){
    foreach($arrayAlphabet as $position => $letter){
        if( abs(- STARTING_POSITION + $i) === $position){
            echo '<b>' . $letter . '</b>';
        }
        else{
            echo $letter;
        }

    }
    echo "<br>";
    array_push($arrayAlphabet, array_shift($arrayAlphabet));
}
