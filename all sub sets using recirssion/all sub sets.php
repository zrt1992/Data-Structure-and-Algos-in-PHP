<?php
$s=[1,2,3];

function printSubString($low,$high,$s,$subset){

    if($low>$high){

        echo "{".$subset."}<br>";return;
    }
    printSubString($low+1,$high,$s,$subset+$s[$low]);
    printSubString($low+1,$high,$s,$subset);

}

printSubString(0,sizeof($s)-1,$s,0);