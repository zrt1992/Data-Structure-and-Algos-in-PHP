<?php
try {
    $myfile = fopen("names.txt", "r") or die("Unable to open file!");
    $txt = "hi i am writing on this files";
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }

} catch (\Exception $e) {
    echo $e->getMessage();
}