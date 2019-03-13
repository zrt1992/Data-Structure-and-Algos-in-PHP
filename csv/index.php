<?php
/**
 * Created by PhpStorm.
 * User: zrt1992
 * Date: 2/9/2019
 * Time: 10:37 PM
 */
ini_set('memory_limit', '-1');

$list=[];
for($i=1;$i<=3600000;$i++){
    $list[]=[1,2,3];
}


$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
?>