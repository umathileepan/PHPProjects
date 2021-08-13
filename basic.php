<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- To run: In cmd: php -S localhost:4000 -->
    <?php
        echo ("Hello World");
        echo "<h1> Add Two Numbers </h1>";
        $num1 = 20;
        $num2 = 30;
        $sum = $num1 + $num2;
        echo "<p> Total of two given numbers: $sum </p>";
        $phrase = "Dog is my favourite animal.";
        echo $phrase;
        echo strtolower($phrase);
        echo strtoupper($phrase);
        echo strlen($phrase);
        echo $phrase[4];
        echo "<p> Replace Cat instead of Dog: " . str_replace("Dog","Cat", $phrase) . "</p>"; 
        echo "<p> Substring: " . substr($phrase, 20,6) . "</p>";
        echo "<p> 2 power of 4: </p>" . pow(2, 4);
        echo "<p> Square number: " . sqrt(144) . "</p>";
        echo max(3,34);
        echo min(9,3);
        echo round(3.7);
        echo floor(3.9);
        echo ceil(4.2);

        
        $title = "Fairy Tale";
        $author = "Danial Steel";
        $wordCount = 3000;
        include "book.php";
        
    ?>
</body>
</html>