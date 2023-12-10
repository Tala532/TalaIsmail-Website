<?php
session_start(); // Start the session at the beginning of the script

$un = $_POST["username"];
$pass = $_POST["password"];

$usersJson = file_get_contents('users.json');
$usersArray = json_decode($usersJson, true);

if ($usersArray !== null && is_array($usersArray)) {
    $loggedIn = false;

    foreach ($usersArray as $user) {
        if ($un === $user["username"] && $pass === $user["password"]) {
            $loggedIn = true;
            $_SESSION["username"] = $un;
            $_SESSION["fullname"] = $user["fullname"];
            break;
        }
    }

    if ($loggedIn) {
        header("Location: ../pages/cv.php");
        exit(); // Terminate the script after header redirect
    } else {
        header("Location: ../index.php");
        exit(); // Terminate the script after header redirect
    }
} else {
    echo "Error: Unable to process user data. Please contact the administrator."; // Display an error message if unable to process usersArray
}
?>
