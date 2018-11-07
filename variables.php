<?php

    #VARIABLES
    /*
        - Prefix $
        - Start with a letter or an underscore
        - Only letters, numbers and underscores
        - Case sensitive
    */

    $output = 'Hello world';

    #DATA TYPES
    /*
        - String
        - Integers
        - Floats
        - Booleans
        - Arrays
        - Objects
        - NULL
        - Resource (return or reference to a function...not an actual data type)
    */

    #CONCATENATION

    $string1 = 'Hello';
    $string2 = 'World';
    $string3 = $string1 . ' ' . $string2;

    // OR

    $string4 = "$string1 $string2";
   

    #ESCAPE CHARACTER
    /*
        - only applicable when using same character
        - i.e if below example used double quotes $string5 = "They're Here" then not necessary
    */ 
    
    $string5 = 'They\'re Here';  
    

    #CONSTANTS
    /*
        - define(name of constant, value)
        - usually upppercase
        - case senstive
        - add 3rd parameter 'true' inside define() to make NOT case senstive
    */
    define('GREETING', 'Hello Everyone');

    
    echo $output;
?>