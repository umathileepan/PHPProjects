<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactMe Form</title>
</head>
<body>
    <h1>Contact Me Form</h1>
    <form action="contactme.php" method="post">
        <label for="firstName">First Name: </label>
        <input type="text" id="firstName" name="firstName">
        <br>
        <hr>
        <label for="lastName">Last Name: </label>
        <input type="text" id="lastName" name="lastName">
        <br>
        <hr>
        <label for="contactNo">Contact Number: </label>
        <input type="text" id="contactNo" name="contactNo">
        <br>
        <hr>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email">
        <br>
        <hr>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password">
        <br>
        <hr>
        <input type="submit">
    </form>
    <?php 
        if($_POST["firstName"] != null && $_POST["lastName"] != null && $_POST["contactNo"] != null && $_POST["email"] != null){
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $conactNo = $_POST["contactNo"];
            $email = $_POST["email"];
            $password = $_POST["password"];
         
             echo $firstName;
             echo $lastName;
             echo $conactNo;
             echo $email;
        }
    ?>
</body>
</html>