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
        HTML <input type="checkbox" name="course[]" value="HTML">
        <br>
        CSS <input type="checkbox" name="course[]" value="CSS">
        <br>
        JavaScript <input type="checkbox" name="course[]" value="JavaScript">
        <br>
        PHP <input type="checkbox" name="course[]" value="PHP">
        <br>
        My SQL <input type="checkbox" name="course[]" value="My SQL">
        <br>
        Node <input type="checkbox" name="course[]" value="Node">
        <br>
        Angular <input type="checkbox" name="course[]" value="Angular">
        <br>
        
        React <input type="checkbox" name="course[]" value="React">
        <br>
        <hr>
        <input type="submit">
    </form>
    <?php 
           
      // $firstName = $lastName = $conactNo = $email = $password = $course = '';

      // if(isset($_POST["submit"])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $conactNo = $_POST['contactNo'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $course = $_POST["course"];
       // }

        echo $firstName;
        echo $lastName;
        echo $conactNo;
        echo $email;
        echo $course[0];
    ?>
</body>
</html>