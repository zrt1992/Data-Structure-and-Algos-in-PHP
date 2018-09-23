<?php

// Complete the arrayManipulation function below.
function arrayManipulation($size, $queries) {
    $min=0;
    $max=0;
    $sum=0;
    foreach($queries as $row){
       $min=$row[0];
       $max=$row[1];
       $sum=$row[2];
       break;
    }
//   echo $min . " " . $max . " " . $sum . "<br>";
//    die;


   $i=0;

    foreach($queries as $row)  {
        if ($i===0) {

            $i=$i+1;


        } else {



            if (($min <= $row[0] && $row[0] <= $max) || ($min <= $row[1] && $row[1] <= $max)) {
                $sum += $row[2];

                if ($row[0] < $min) $min = $row[0];
                if ($row[1] > $max) $max = $row[1];
            } else {

                if ($row[2] > $max) $max = $row[2];
                if ($row[0] >= $max) $max = $row[1];
                if ($row[1] <= $min) $min = $row[0];
            }
           echo $min . " " . $max . " " . $sum . "<br>";
//            echo "lol";


        }


    }
    // echo $i;
     echo $sum;die;



}



$stdin = fopen("crush.txt", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

$queries =array();

for ($i = 0; $i < $m; $i++) {
    fscanf($stdin, "%[^\n]", $queries_temp);
    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = arrayManipulation($n, $queries);



fclose($stdin);

