<?php

$name = 'ivan';
$arrayName = str_split($name);
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$arrayAlphabet = explode(',', $alphabet);
$rows = sizeof($arrayName);


for($i = 0; $i < $rows; $i++){
    foreach($arrayAlphabet as $letter){
        if($letter === $arrayName[$i] && $letter === $arrayName[$rows - 1 - $i]){
            echo '<b><u>' . $letter . '</u></b>';
            continue;
        }
        else if($letter === $arrayName[$rows - 1 - $i]){
            echo '<u>' . $letter . '</u>';
            continue;
        }
        else if($letter === $arrayName[$i]){
            echo '<b>' . $letter . '</b>';
            continue;
        }
        else{
            echo $letter;
        }
    }
    echo "<br>";
}
