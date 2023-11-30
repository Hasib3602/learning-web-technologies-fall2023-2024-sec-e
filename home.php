<?php
include_once("../model/userModel.php");

$user = getAllUser();

echo json_encode($user);

?>