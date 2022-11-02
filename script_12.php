<?php

    class Employee {

        function __construct() {
            echo "This is a constructor\n";
        }

        function __destruct() {
            echo "This is a desctructor\n";
        }

    }

    $emp = new Employee(); 

?>