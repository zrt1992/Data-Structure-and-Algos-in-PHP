<?php
$s="abcd";

function printSubString($low,$high,$s,$sub=""){

    if($low>$high){
        //echo '<br>'.$sub;
        return;
    }

        echo $s[$low];

    printsometing($low+1,$high,$s);
    echo '<br>';
    printSubString($low+1,$high,$s,$sub.$s[$low]);



}

function printsometing($low,$high,$a){
    for($i=$low;$i<=$high;$i++){
        echo $a[$i];
    }
}
printSubString(0,strlen($s)-1,$s);