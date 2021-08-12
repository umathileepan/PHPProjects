<?php
    $fruits = array("Apple","Pears","Grapes","Oranges");
    echo $fruits[2] . "<br>";

    function greet($name){
        echo "Hello $name <br>";
    }

    greet("Uma");
    greet("Astro");

    function cube($num){
        return $num * $num * $num;
    }

    echo cube(3) . "<br>";
    $cube = cube(5);
    echo $cube . "<br>";
?>