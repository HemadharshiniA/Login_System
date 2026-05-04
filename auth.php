<?php
session_start();

require_once "includes/validation.php";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$usernameError = validateUsername($username);
$emailError = validateEmail($email);
$passwordError = validatePassword($password);

if ($usernameError != "") {
    $_SESSION['error'] = $usernameError;
    header("Location: login.php");   //to re-direct user after validation
    exit();                          //stops execution 
}

if ($emailError != "") {
    $_SESSION['error'] = $emailError;
    header("Location: login.php");
    exit();
}

if ($passwordError != "") {
    $_SESSION['error'] = $passwordError;
    header("Location: login.php");
    exit();
}

$users = [
    [
        "user_id" => 1,
        "username" => "Sangeetha",
        "email" => "sangeetha@gmail.com",
        "password" => "san@123",
        "theme" => "dark"
    ],
    [
        "user_id" => 2,
        "username" => "Hema",
        "email" => "hema@gmail.com",
        "password" => "hema@15",
        "theme" => "light"
    ],
    [
        "user_id" => 3,
        "username" => "Priya",
        "email" => "priya@gmail.com",
        "password" => "priya@378",
        "theme" => "warm"
    ]
];

$loggedInUser = null;

foreach ($users as $user) {
    if (
        $user['username'] == $username &&
        $user['email'] == $email &&
        $user['password'] == $password
    ) {
        $loggedInUser = $user;
        break;     //as soon as match is found , it breaks
    }
}

if ($loggedInUser != null) {

    $_SESSION['user_id'] = $loggedInUser['user_id'];
    $_SESSION['username'] = $loggedInUser['username'];
    $_SESSION['email'] = $loggedInUser['email'];
    $_SESSION['theme'] = $loggedInUser['theme'];

    if (isset($_POST['remember'])) {
        setcookie("remember_username", $loggedInUser['username'], time() + (7*24*60*60));
        setcookie("user_theme", $loggedInUser['theme'], time() + (7*24*60*60));
    } else {
        setcookie("remember_username", "", time() - 3600);
        setcookie("user_theme", $loggedInUser['theme'], time() + (7*24*60*60));
    }

    header("Location: dashboard.php");
    exit();

} else {
    $_SESSION['error'] = "Invalid login details. Please check your email, username and password.";
    header("Location: login.php");
    exit();
}

?>