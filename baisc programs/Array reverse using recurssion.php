<?php

$k=[5,4,3,2,1,0,-1];

reverse($k,0, sizeof($k)-1);
function reverse(&$a,$i,$j){

    if($i>$j) {

        return;
    }else{
        //print_r($a);die;
        $temp=$a[$i];
        $a[$i]=$a[$j];
        $a[$j]=$temp;


       reverse($a,$i+1,$j-1);
    }

}
echo '<pre>';
print_r($k);die;
?>