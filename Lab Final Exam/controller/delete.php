<?php

   require_once('../model/employeeModel.php');

         if(isset($_GET['username'])) {
              $username = $_GET['username'];

                   deleteEmployee($username);
   }

?>