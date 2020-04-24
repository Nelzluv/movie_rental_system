<?php
session_start();
include "conn.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $username_err = $password_err = "";
    $errors = [];
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    //Validation
    if(empty($username)){
        $username_err = "Please type in a username";
        array_push($errors, $username_err);
    }

    if(empty($password)){
        $password_err = "Please type in a password";
        array_push($errors, $password_err);
    }

    //Query the database to login
    if(empty($username_err) && empty($password_err)){
        $query = "select * from users where username = :username and password = :password";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        if ($stmt->execute()) {
            $users = $stmt->fetch();           
            if(isset($users['username']) and isset($users['password'])){
                    $_SESSION['user_info'] = [];
                    $_SESSION['user_info'] = $users;
                    echo "<script>location.href='view_customers.php';</script>";   
            } else {
                echo "Username or password is not correct";
            }
        } else {
            echo $stmt->errorInfo();
           // echo "Something went wrong";
        }
    }

    //Output errors
    foreach ($errors as $error ) {
        echo $error."<br>";
    }
}
