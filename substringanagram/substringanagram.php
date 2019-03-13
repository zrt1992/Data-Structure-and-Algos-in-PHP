<?php
//$data = "zaaaabbbz";
//echo '<pre>';
//print_r(count_chars($data, 1));
//    die;
//apple
// Complete the sherlockAndAnagrams function below.
function sherlockAndAnagrams($s) {
    $stringSize=strlen($s);
    $data=[];
for($i=0;$i<$stringSize;$i++){

    for($j=$i;$j<$stringSize;$j++){
        for($t=$i;$t<=$j;$t++){
            $data[$t][]=countchars($s[$t]);
        }


    }


}
echo '<pre>';
print_r($data);

}
function countchars($data){

    foreach (count_chars($data, 1) as $i => $val) {
        $temp[123-$i]=$val;
    }
    return $temp;
}



$stdin = fopen("test.txt", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    echo  $result = sherlockAndAnagrams($s);


}

fclose($stdin);

