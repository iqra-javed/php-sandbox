<?php
    # Loops

    /*
        4 TYPES:

            - FOR
            - While
            - Do..While
            - Foreach
    */

    // FOR
    // for($i = 0; $i <= 10; $i++) {
    //     echo 'Number ' .$i;
    //     echo '<br';
    // }

    // WHILE
    // $i = 0;
    // while($i < 10) {
    //     echo $i;
    //     echo '<br';
    //     $i++;
    // }

    // DO..WHILE // Will always run at least once
    // $i = 0;
    // do{
    //     echo $i;
    //     echo '<br';
    //     $i++;
    // }

    // while($i < 10);

    // FOREACH (meant to work with arrays)
    $people = array('Iqra', 'Aqsa', 'Zani', 'Furqan');

    foreach($people as $person) {
        echo $person;
        echo '<br>';
    }

    // if using foreach for associative array
    $people = array('Iqra' => 'purple', 'Aqsa' => 'pink', 'Zani' => 'beige', 'Furqan' => 'yellow');
    foreach($people as $person => $color){
        echo $person.': '.$color;
        echo '<br>';
    }


?>