<?php
    include_once('../model/employeeModel.php');

    if (isset($_GET['uname'])) {
        $username = $_GET['uname'];

        $user = getUser($username);

        echo $user['StaffName']."+". $user['StaffNumber']."+".$user['StaffUserName'];

    } else {
        echo "Error! username not found.";
    }
?>