<?php

    // while loop
    $i = 0;
    while ($i < 5) {
        echo "${i}\n";
        $i++;
    }

    // do-while loop
    $j = 0;
    do {
        echo "${j} \n";
        $j++;
    }
    while ( $j < 5 );

    // for loop
    for ( $k = 0; $k < 5; $k++ ) {
        echo "${k}\n";
    }

    $myarr = array(1=>"val", 2=>"val", 3=>"val", 4=>"val", 5=>"val");

    // for-each loop
    foreach($myarr as $key=>$value){
        echo "${key} : ${value} \n";
    }

?>