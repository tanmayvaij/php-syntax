<?php 

    $a = 98;
    $b = 9;

    function printValue() {
        global $a, $b;
        $a = 50;
        $b = 60;
    }

    echo "a:${a} b:${b} \n";

    printValue();

    echo "a:${a} b:${b} \n";

?>