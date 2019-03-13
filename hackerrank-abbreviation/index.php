<?php

// Complete the abbreviation function below.
     $a="a";
     $b="AA";
    $size_of_a = strlen($a);
    $size_of_b = strlen($b);


    for ($i = 0; $i <= $size_of_a; $i++) {
        for ($j = 0; $j <= $size_of_b; $j++) {
            $arr[$i][$j] = 0;
        }

    }
    $arr[0][0] = 1;

    $containsuppercase = 0;
    for ($k = 1; $k <= $size_of_a; $k++) {
        $i = $k - 1;
        if (ctype_upper($a[$i]) || $containsuppercase) {

            $containsuppercase = 1;
            $arr[$k][0] = 0;
        } else {

            $arr[$k][0] = 1;
        }

    }

//

    for ($k = 1; $k <= $size_of_a; $k++) {
        for ( $l = 1; $l <= $size_of_b; $l++) {
            $i = $k - 1; $j = $l - 1;
            // when the characters are equal, set = previous character bool.
            if ($a[$i] == $b[$j]) {
                $arr[$k][$l] = $arr[$k-1][$l-1];
                continue;
            }
            // elif uppercase a == b, set = prev character bool. or just eat a.
            else if (strtoupper($a[$i]) == $b[$j] ) {
                $arr[$k][$l] = $arr[$k-1][$l-1] + $arr[$k-1][$l];
                continue;
            }
            // elif a is uppercase and no more b, or uppercase a is not b, then false
            else if (ctype_upper($a[$i])) {
                $arr[$k][$l] = 0;
                continue;
            }
            //else just eat a
            else {
                $arr[$k][$l] = $arr[$k-1][$l];
                continue;
            }
        }
    }

    for ($i = 0; $i <= $size_of_a; $i++) {
        for ($j = 0; $j <= $size_of_b; $j++) {
           echo $arr[$i][$j];
        }
        echo '<br>';

    }

//    if($arr[$size_of_a][$size_of_b]==1) {
//        return "YES";
//    }else{
//        return "NO";
//    }






//$stdin = fopen("abv.txt", "r");
//
//fscanf($stdin, "%d\n", $q);
//
//for ($q_itr = 0; $q_itr < $q; $q_itr++) {
//    $a = '';
//    fscanf($stdin, "%[^\n]", $a);
//
//    $b = '';
//    fscanf($stdin, "%[^\n]", $b);
//
//   echo $result = abbreviation($a, $b);
//
//
//}
//
//fclose($stdin);

