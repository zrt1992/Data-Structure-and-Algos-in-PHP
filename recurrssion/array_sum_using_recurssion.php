<?php
/**
 * Created by PhpStorm.
 * User: zrt1992
 * Date: 9/11/2018
 * Time: 10:50 PM
 */

$a=[2,6,3];

function sum($a,$i,$j,$sum=0){
        if($i>$j){
            echo $sum;return;
        }
        return sum($a,$i+1,$j,$sum+$a[$i]);
     return sum($a,$i+1,$j,$sum);
}


 echo sum($a,0,sizeof($a)-1,0);