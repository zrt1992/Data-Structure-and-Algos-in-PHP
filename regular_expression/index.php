<?php
/**
 * Created by PhpStorm.
 * User: coeus
 * Date: 7/11/18
 * Time: 11:23 AM
 */
$line = "vigc";
// perform a case-Insensitive search for the word "Vi"

if (preg_match("/[c]/", $line, $match)) {
    print_r($match);
    print "Match found!";
}
else{
    print "no no";
}
