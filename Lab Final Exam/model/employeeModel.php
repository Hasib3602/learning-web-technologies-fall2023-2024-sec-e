<?php

    require_once("../model/userModel.php");

    function addEmployee($user){
        $con = getConnection();
        $sql = "insert into staffinfo (StaffName, CompanyName, StaffNumber, StaffUserName) values('{$user['name']}', '{$user['cname']}', '{$user['number']}', '{$user['username']}')";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function getAllemployee(){
        $con = getConnection();
        $sql = "select * from staffinfo";
        $result = mysqli_query($con, $sql);
        $guests = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($guests, $user);
        }
        
        return $guests;
    }
    
    function register($employee) 
    {
        $con = getConnection();
        $sql = "select * from staffinfo where StaffUserName='{$employee['username']}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            return "Username is already taken";
        }
        $auth = ['username' => $employee['username'], 'password'=>$employee['password']];

        $result = addEmployee($employee);
        $login = addAuth($auth);

        if ($result && $login) {
            header('location: ../view/login.php');
        } else {
            return "Database error!";
        }
    }

    function deleteEmployee($username){
        $con = getConnection();
        $sql = "delete from staffinfo where StaffUserName = '{$username}'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header('location: ../view/admin.php');
        } else {
            return "Database error!";
        }
    }

?>