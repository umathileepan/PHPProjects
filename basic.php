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
        echo str_replace("Dog","Cat",$phrase);
        echo substr($phrase, 20,6);
    ?>
</body>
</html>