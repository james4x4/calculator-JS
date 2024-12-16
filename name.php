<link rel="stylesheet" href="css/output.css">
<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    echo "first name:$fname ";
    echo "last name:$lname ";
    echo "email:$email ";
    echo "phone number:$number ";
    echo "password:$password1 ";
    echo "confirm password:$password2 ";
?>