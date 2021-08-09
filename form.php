<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="GET">
        <label for="name">First Name</label>
        <input id="name" type="text" name="name">
        <br>
        <hr>
        <label for="age">Age</label>
        <input type="number" id="age" name="age">
        <br>
        <hr>
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["name"] ?>
    you are <?php echo $_GET["age"]?> years old.
</body>
</html>