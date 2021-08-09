<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="GET">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="submit">
    </form>
       Answer <?php 
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                if($num1 != null && $num2 != null){
                $sum = $num1 + $num2;
                echo $sum;
                }
                ?>
</body>
</html>