<?php
$s="abc";

function printSubString($low,$high,$s,$subset=""){

    if($low>$high){

        echo "{".$subset."}<br>";return;
    }
    printSubString($low+1,$high,$s,$subset.$s[$low]);
    printSubString($low+1,$high,$s,$subset);

}

printSubString(0,strlen($s)-1,$s,"");