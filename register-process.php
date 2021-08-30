<?php
require('helper.php');

// error variable
$error = array();

$firstName = validate_input_text($_POST['firstName']);
if (empty($firstName)){
    $error[] = "You forgot to enter First Name";
}

$lastName = validate_input_text($_POST['lastName']);
if (empty($lastName)){
    $error[] = "You forgot to enter Last Name";
}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter password";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "You forgot to confirm password";
}
// check submit is successful or not
if (empty($error)) {
    $hash_pass = password_hash($password, PASSWORD_DEFAULT);
    $con = new mysqli("localhost", "root", "", "shopping");

    $query = "INSERT INTO user (userID,firstName,lastName,email,pwd,register) 
                VALUES('',?,?,?,?,NOW())";

    $q = mysqli_stmt_init($con);
    // prepare sql statement
    mysqli_stmt_prepare($q, $query);
    // bind values
    mysqli_stmt_bind_param($q, 'ssss', $firstName, $lastName, $email, $hash_pass);
    // execute statement
    mysqli_stmt_execute($q);

    if (mysqli_stmt_affected_rows($q) == 1){
        session_start();
        $_SESSION['userID'] = mysqli_insert_id($con);
        header('Location:home.php');
        exit();
    } else {
        print "Fail to add to DB";
    }

} else{
    echo 'Fail!';
}


