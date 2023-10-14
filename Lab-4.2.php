<?php

    $currpassword = $_REQUEST['currpassword'];
    $newpassword = $_REQUEST['newpassword'];
    $retypepassword = $_REQUEST['retypepassword'];

    if($currpassword == "" || $newpassword == "" || $retypepassword == ""){
        echo "null value";
    }else if($currpassword !== $newpassword && $newpassword == $retypepassword){
        setcookie('flag', 'true', time()+3600, '/');
        echo "Password changed successfully";
    }else{
        echo "invalid password! or can not use previous password again.";
    }

?>