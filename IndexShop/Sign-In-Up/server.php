<?php
session_start();

//inicjalizowanie zmiennych
$username = "";
$email = "";
$errors = array();

//Połączenie z BD
$db = mysqli_connect('localhost', 'root', '', 'SystemUsers');

// Sign Up użytkownik
if (isset($_POST['reg_user'])){
    //otrzymać wszystkie wartości wejściowe z form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_sh = mysqli_real_escape_string($db, $_POST['password_sh']);
    $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

    //Kalukutena
    // vistiena
    if (empty($username)) { array_push($errors, "Username is required");}
    if (empty($email)) { array_push($errors, "Email is required");}
    if (empty($password_sh)) { array_push($errors, "Password is required");}
    if ($password_sh != $confirm_password){
        array_push($errors, "The two passwords do not match");
    }

    //Check DB
    // a user
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { 
        if ($user['username'] === $username){
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email){
            array_push($errors, "email alraedy axists");
        }
    }

    //Finality 
    if (count($errors) == 0){
        $password = md5($password_sh);
        
        $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['succes'] = "You are now logged in";
        header('location: home.html'); 
   }
}