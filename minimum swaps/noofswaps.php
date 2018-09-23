<?php

// Complete the minimumSwaps function below.
function minimumSwaps($arr)
{

    $n = sizeof($arr);

    for ($i = 0; $i < $n; $i++) {
        $m[$arr[$i]] = $i;
    }

    sort($arr);

    for ($i = 0; $i < $n; $i++) {
        $ar[$i] = $m[$arr[$i]];
    }
    $m = null;
    $swaps = 0;
    for ($i = 0; $i < $n; $i++) {
        $val = $ar[$i];
        if ($val < 0) {
            continue;
        }
        while ($val != $i) {
            $new_val = $ar[$val];
            $ar[$val] = -1;
            $val = $new_val;
            $swaps++;
        }
        $ar[$i] = -1;
    }
    return $swaps;


}


$stdin = fopen("noofswaps.txt", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $res = minimumSwaps($arr);


fclose($stdin);
