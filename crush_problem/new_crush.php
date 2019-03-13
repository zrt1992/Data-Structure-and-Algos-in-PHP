<?php

// Complete the arrayManipulation function below.
function arrayManipulation($size, $queries) {

    $min=999999999999999999999;
    $max=-1;
    foreach ($queries as $row){
        if($row[0]<$min) $min=$row[0];
        if($row[1]>$max) $max=$row[1];
        if(!isset($n[$row[0]])){
            $n[$row[0]]=0;
        }
        if(!isset($n[$row[1]+1])){
            $n[$row[1]+1]=0;
        }
        $n[$row[0]]+=$row[2];
        $n[$row[1]+1]-=$row[2];




    }

    ksort($n );
    $temp=$n[$min];
    for($i=$min+1;$i<=$max;$i++){
        if(isset($n[$i])){
            $n[$i]+=$temp;
            $temp=$n[$i];
        }else{
            continue;
        }

    }
    return max($n);



}



$stdin = fopen("crush.txt", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

$queries = array();

for ($i = 0; $i < $m; $i++) {
    fscanf($stdin, "%[^\n]", $queries_temp);
    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

echo $result = arrayManipulation($n, $queries);


fclose($stdin);

