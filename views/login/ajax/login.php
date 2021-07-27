<?php

include '../php/functions.php';

$username = $_POST["Username"];
$email = $_POST["Username"];
$password = $_POST["Password"];

login($username, $email, $password);
