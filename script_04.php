<?php

    // String
    $mystr = "Hello World";
    echo var_dump($mystr);

    // Integer
    $myint = 255; 
    echo var_dump($myint);

    // Float
    $myfloat = 45.55;
    echo var_dump($myfloat);

    // Boolean
    $mybool = true;
    echo var_dump($mybool);

    // Numeric Array
    $myarr1 = array(1,2,3);
    echo print_r($myarr1);

    // Associative Array
    $myarr2 = array(
        "one" => 1,
        "two" => 2,
        "three" => 3,
        "four" => 4,
        "five" => 5
    );
    echo print_r($myarr2);

    // Multidimensional Array
    $myarr3 = array(
        "one" => array(1, 2, 3),
        "two" => array(4, 5, 6)
    );
    echo print_r($myarr3);

    // Null
    $mynull = NULL;
    echo var_dump($mynull);

?>