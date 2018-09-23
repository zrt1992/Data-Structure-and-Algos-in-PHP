<?php
/**
 * Created by PhpStorm.
 * User: zrt1992
 * Date: 9/23/2018
 * Time: 10:23 AM
 */

function minimumSwaps($a)
{
    $swipes=0;
    $size = sizeof($a);
    for($i=0;$i<$size-1;$i++){
       echo  $a[$i]." ";
    }
    die;
    for($i=0;$i<$size-1;$i++){
        if($i+1<=$size-1){
            $res=findMin($i,$size-1,$a);
            if($a[$i]>$a[$res]){
                $temp=$a[$i];
                $a[$i]=$a[$res];
                $a[$res]=$temp;
                $swipes++;
            }



        }
    }
    echo $swipes;
}
function findMin($left,$right,$a){
    $min=$a[$left];
    $key=$left;
    for($i=$left;$i<=$right;$i++){
        if($a[$i]<$min){
            $min=$a[$i];
            $key=$i;
        }
    }
    return $key;

}

$stdin = fopen("noofswaps.txt", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $res = minimumSwaps($arr);



fclose($stdin);
