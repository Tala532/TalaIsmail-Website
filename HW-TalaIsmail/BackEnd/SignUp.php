<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function VarExist($var){
    if (isset($var)){
        return $var;
    } else {
        header("location:../index.php");
        exit();
    }
}

$user = new stdClass();

$user->fullname = VarExist($_POST["fullname"]);
$user->username = VarExist($_POST["username"]);
$user->pass = VarExist($_POST["password"]);
$user->sex = VarExist($_POST["sex"]);
$user->birthdate = VarExist($_POST["birthday"]);

if (InsertUserToFilefromObject($user)) {
    header("location:../index.php");
    exit(); // Redirect before any content is output
} else {
    echo "Signup failed!";
    exit(); // Terminate script execution
}

function InsertUserToFilefromObject($user){
    $usersfile = file_get_contents('users.json');
    $userarray = json_decode($usersfile, true);

    $userarray[] = array(
        "fullname" => $user->fullname,
        "username" => $user->username,
        "password" => $user->pass,
        "sex" => $user->sex,
        "birthdate" => $user->birthdate,
    );

    $newuser = json_encode($userarray);

    if ($newuser !== false) {
        if (file_put_contents('users.json', $newuser) !== false) {
            return true; // signup successful
        } else {
            return false; // signup failed due to file write issue
        }
    } else {
        return false; // signup failed due to encoding issue
    }
}
?>
