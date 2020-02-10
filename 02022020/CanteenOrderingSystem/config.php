<?php

    // define('DB_SERVER', 'localhost');
    // define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', '');
    // define('DB_NAME', 'ordering_system');

    // $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // if($db === false)
    // {
    //     die("Error: Could not connect." . $db -> connect_error);
    // }

    // $firstName = "";
    // $lastName = "";
    // $email = "";
    // $mobile = "";
    // $password = "";
    // $rPassword = "";

    

    // if(isset($_POST['register']))
    // {
    //     $firstName = $_POST['fName'];
    //     $lastName = $_POST['lName'];
    //     $email = $_POST['email'];
    //     $mobile = $_POST['mobile'];
    //     $password = $_POST['password'];
    //     $rPassword = $_POST['rPassword'];

    //     $query = "INSERT INTO user (firstName, lastName, email, mobile, password, rPassword) VALUES ('$firstName', '$lastName', '$email', '$mobile', '$password', '$rPassword')";
    //     mysqli_query($db, $query);

    //     header('location: index.html');
    // }

?>


<?php 

    // session_start()

    // define('DB_SERVER', 'localhost');
    // define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', '');  
    // define('DB_NAME', 'ordering_system');

    $db = mysqli_connect('localhost', 'root', '', 'ordering_system');

    $firstName = "";
    $lastName = "";
    $email = "";
    $mobile = "";
    $password = "";
    $rPassword = "";
    $errors = array();

    if(isset($_POST['register']))
    {
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $rPassword = $_POST['rPassword'];

        if(empty($firstName))
        {
            array_push($errors, "First name is required.");
        }
        if(empty($lastName))
        {
            array_push($errors, "Last name is required.");
        }
        if(empty($email))
        {
            array_push($errors, "Email is required.");
        }
        if(empty($mobile))
        {
            array_push($errors, "Mobile is required.");
        }
        if($password != $rPassword)
        {
            array_push($errors, "Password do not match.");
        }

        $query = "SELECT * FROM user WHERE email = '$email' OR mobile ='$mobile' LIMIT 1";
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($result);

        if ($user) // Check if email and password already exists
        { 
            if ($user['email'] === $email) 
            {
                array_push($errors, "Email already exists");
            }

            if ($user['mobile'] === $mobile) 
            {
                array_push($errors, "Mobile already exists");
            }
        }

        if (count($errors) == 0) 
        {
            $password = md5($password); //encrypt the password before saving in the database

             $query = "INSERT INTO user (firstName, lastName, email, mobile, password) 
                       VALUES('$firstName', '$lastName', '$email', '$mobile', '$password')";
        
            mysqli_query($db, $query);
        
            $_SESSION['firstName'] = $firstName;
            $_SESSION['lastName'] = $lastName;
            $_SESSION['email'] = $email;
            $_SESSION['mobile'] = $mobile;
            $_SESSION['success'] = "You are now logged in";
        
            header('location: index.html');
        }
    }
?>

<!-- Sign in -->

<?php 

    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email))
        {
            array_push($errors, "Email is required.");
        }
        if(empty($password))
        {
            array_push($errors, "Password is required.");
        }
        if(count($errors) == 0)
        {
            $password = md5($password);

            $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($db, $query);

            if(mysqli_num_rows($result) == 1)
            {
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "You are logged in.";

                header('location: index.html');
            }
            else
            {
                array_push($errors, "Wrong username/password combination.");
            }
        }
    }

?>