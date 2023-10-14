<?php 
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    if($username == "" || $password == ""){
        echo "null value";
    }elseif(strlen($username)>= 2 && strlen($password)>=8){
        $count = 0;
        $count1 = 0;
        for($i = 0; $i < strlen($username); $i++){
            $char = $username[$i];

            if (!ctype_alnum($char) && $char !== '.' && $char !== '-' && $char !== '_') {
                $count++;
            }
        }
        for($i = 0; $i < strlen($password); $i++) {
            $char = $password[$i];
            if (!ctype_alnum($char) && $char !== '@' && $char !== '#' && $char !== '$' && $char !== '%') {
                $count1++;
            }
        }
        if($count == 0 && $count1 == 0){
            header('location: home.php');
        }
        else {
            echo "Invalid Username or password";
        }
    }

    
?>