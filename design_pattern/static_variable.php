<?php
function foo() {
    static $index = 0;
    $index++;
    echo "$index\n";
}
foo();
foo();
foo();