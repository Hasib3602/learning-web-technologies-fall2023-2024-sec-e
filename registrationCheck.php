<?php

include_once("../model/userModel.php");
$id = "";
$password = "";
$confirmPassword = "";
$name = "";
$userType = "";
if (isset($_POST["submit"])) {

    $id = $_POST["id"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $name = $_POST["name"];
    if (isset($_POST["type"])) {
        $userType = $_POST["type"];
    } else {
        echo "Please select a user type\n\n";
    }

    if (!$_POST['id'] || !$_POST['password'] || !$_POST['confirmPassword'] ||  !$_POST['name']) {
        echo "Please filled up all required fields\n";
    } else if ($password != $confirmPassword) {
        echo "Password did not match";
    } else {
        $result = register($id, $name, $userType, $password);
        if ($result) {
            header('location: ../view/login.php');
        } else {

            echo "Error!";
        }
    }
}
?>