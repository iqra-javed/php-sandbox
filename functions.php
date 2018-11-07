<?php
    # FUNCTIONS
     
    // Create Simple Function 
    function simpleFunction() {
        echo 'Hello World';
    }

    // Run Simple Function 
    simpleFunction();

    // Function With Param
    function sayHello($name = 'World') { // World is default param
        echo "Hello $name<br>";
    }

    sayHello('Iqra');
    sayHello();

    // Return Value
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    echo addNumbers(2, 3);

    // Passing Arguments by Value
    $myNum = 10;
    function addFive($num) {    
        $num += 5;
    }

    // Passing Arguments by Reference
    function addTen(&$num) {
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>";
?>