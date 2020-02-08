<?php

    $firstName = "";
    $lastName = "";
    $email = "";
    $mobile = "";
    $password = "";
    $rPassword = "";

    $db = mysqli_connect('localhost', 'root', '', 'ordering_system');

    if(isset($_POST['register']))
    {
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $rPassword = $_POST['rPassword'];

        $query = "INSERT INTO user (firstName, lastName, email, mobile, password, rPassword) VALUES ('$firstName', '$lastName', '$email', '$mobile', '$password', '$rPassword')";
        mysqli_query($db, $query);

        header('location: index.html');
    }

?>