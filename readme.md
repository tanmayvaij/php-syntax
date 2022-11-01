# PHP Syntax

### 1. Hello World
```php
// script_01.php
<?php
    echo "Hello World";
?>
```
<br/>

### 2. Comments
```php
// script_02.php
<?php
    // Single Line Comment
    /* 
        This 
        Is 
        A 
        Multi-Line
        Comment
    */
?>
```
<br/>

### 3. Variable
```php
// script_03.php
<?php
    $var1 = "Simple String";
    echo $var1;
?>
```
<br/>

### 4. Data types
```php
// script_04.php
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
```
<br/>

### 5. Operators
<br/>

> Unary Operators

|Operator|Name|Description|
|--------|----|-----------|
|++$x|Pre-increment|Increments $x by 1, then returns $x|
|$x++|Post-increment|Return $x, then increments $x by 1|
|--$x|Pre-decrement|Decrements $x by 1, then returns $x|
|$x--|Post Decrement|Return $x, then decrements $x by 1|
|!$x|Not operator|True if $x is not true|

<br/>

> Arithmetic Operators

|Operator|Description|Example|Result|
|--------|-----------|-------|------|
|+|Addition|$x + $y|Sum of $x and $y|
|-|Subtraction|$x - $y|Difference of $x and $y|
|*|Multiplication|$x * $y|Product of $x and $y|
|/|Division|$x / $y|Quotient of $x and $y|
|%|Modulus|$x % $y|Remainder of $x divided by $y|
|&ast;&ast;|Exponential|$x**$y|Result of raising $x to the $yth power|

<br/>

> Comparison Operators

|Operator|Description|Example|Result|
|--------|-----------|-------|------|
|==|Equal|$x == $y|True if $x is equal to $y|
|===|Identical|$x === $y|True if $x is equal to $y, and they are of the same type|
|!=|Not equal|$x != $y|True if $x is not equal to $y|
|<>|Not equal|$x <> $y|True if $x is not equal to $y|
|!==|Not identical|$x !== $y|True if $x is not equal to $y, or they are not of the same type|
|<|Less than|$x < $y|True if $x is less than $y|
|>|Greater than|$x > $y|True if $x is greater than $y|
|>=|Greater than or equal to|$x >= $y|True if $x is greater than or equal to $y|
|<=|Less than or equal to|$x <= $y|True if $x is less than or equal to $y|

<br/>

> Logical Operators

|Operator|Description|Example|Result|
|--------|-----------|-------|------|
|and|and|$x and $y|True if both $x and $y are true|
|or|or|$x or $y|True if either $x or $y is true|
|xor|xor|$x xor $y|True if either $x or $y is true, but not both|
|&&|and|$x && $y|True if both $x and $y are true|
|&#x7c;&#x7c;|or|$x &#x7c;&#x7c; $y|True if either $$x or $y is true|
|!|not|!$x|True if $x is not true|

<br/>

> String Operators

|Operator|Description|Example|Result|
|--------|-----------|-------|------|
|.|Concatenation|$str1 . $str2|Concatenation of $str1 and $str2|
|.=|Concatenation assignment|$str1 .= $str2|Appends the $str2 to the $str1|

<br/>

> Ternary Operators

```php
<?php 
    ( /*condition*/ ) ? /*expression1*/ : /*expression2*/;
?>
```
<br/>

### 6. Conditional Statements
```php
// script_05.php
<?php 

    if ( /*condition1*/ ) {
        // some code
    }
    elseif ( /*condition2*/ ) {
        // some code
    }
    else {
        // some code
    }

?>
```
<br/>

### 7. Switch-Case
```php
// script_06.php
<?php

    switch ( /*variable*/) {

        case /*value*/:
            // code
            break;

        default:
            // code
            break;

    }
    
?>
```
<br/>

### 8. Loops
```php
// script_07.php
<?php

    // while loop
    while ( /* condition */ ) {
        // code
    }

    // do-while loop
    do {
        // code
    }
    while ( /* condition */ )

    // for loop
    for ( /*initialValue*/; /*condition*/ ; /*iterator*/ ) {
        // code
    }

    // for-each loop
    foreach( /*array*/ as /*item*/ ){
        // code
    }

?>
```

### 9. Function
```php
// script_08.php
<?php
    function functionName( /*parameters*/ ) {
        // code
    }
?>
```