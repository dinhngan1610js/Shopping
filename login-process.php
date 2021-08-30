<?php

// error variable
$error = array();

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter password";
}

if (empty($error)){
    $con = new mysqli("localhost", "root", "", "shopping");
    $query = "SELECT userID,firstName,lastName,email,pwd FROM user WHERE email =?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q,$query);

    mysqli_stmt_bind_param($q, 's',$email);
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    if (!empty($row)){
        if (password_verify($password, $row['pwd'])){
            $_SESSION['userID'] = mysqli_insert_id($con);
            header('Location:home.php');
            exit();
        }
        else{
            echo '<script>alert("Password is wrong.")</script>';
        }
    } else {
        print "You have not sign up.";
    }
} else {
    echo 'Fill out email and password';
}