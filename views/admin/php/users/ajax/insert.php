<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/views/php/sql/database.php');
include '../../users/functions.php';
session_start();

$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['Password'];

$uid = single_record("SELECT * FROM users WHERE Username = '$_SESSION[Username]'");

insertUser($username, $email, $password, $uid['Unique_Id']);
