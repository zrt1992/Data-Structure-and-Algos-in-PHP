<?php

// Complete the minimumBribes function below.
function minimumBribes($a) {

    $b = [];
    for ($i = 1; $i <= sizeof($a); $i++) {
        $b[$i] = $a[$i - 1];
    }

    $flag=0;
    for ($i = 1; $i <= sizeof($b); $i++) {
        if (($b[$i] - $i) > 2) {
            $flag++;
        }
    }
    if($flag>0) {
        echo "Too chaotic"."\n";

    } else{
        bubble_Sort3($b);
    }

}

function bubble_sort($arr) {
    $count=0;
    $size = sizeof($arr);
    for ($i=1; $i<=$size-1; $i++) {
        for ($j=1; $j<=$size-1; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                $count++;
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }

    echo $count."\n";
}

function bubble_Sort3($my_array )
{
    $count=0;
    do
    {
        $swapped = false;
        for( $i = 1, $c = count( $my_array ); $i < $c; $i++ )
        {
            if( $my_array[$i] > $my_array[$i + 1] )
            {
                $temp = $my_array[$i + 1];
                $my_array[$i+1] = $my_array[$i];
                $my_array[$i] = $temp;
                $count++;
                $swapped = true;
            }
        }
    }
    while( $swapped );
    echo $count."\n";

}
$stdin = fopen("test.txt", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%[^\n]", $q_temp);

    $q = array_map('intval', preg_split('/ /', $q_temp, -1, PREG_SPLIT_NO_EMPTY));

    minimumBribes($q);
}

fclose($stdin);
