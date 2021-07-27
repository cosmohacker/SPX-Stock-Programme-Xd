<?php include '../../../contents/electron/html/menu.html';

ob_start();
session_start();
error_reporting(0);

if ($_SESSION['Username'] == null) {
    header("Location: ../../login/login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPX - Stock Programme Xd">
    <meta name="author" content="cosmohacker">
    <title>SPX Yönetim</title>
    <!-- Favicon -->
    <link rel="icon" href="../../../contents/admin/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../../../contents/admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">

    <link rel="stylesheet" href="../../../contents/electron/css/titleBar.css">
    <link rel="stylesheet" href="../../../contents/custom/admin/css/scrollbar.css">
    <link rel="stylesheet" href="../../../contents/custom/admin/css/users.css">
    <link rel="stylesheet" href="../../../contents/custom/admin/css/stocks.css">
    <link rel="stylesheet" href="../../../contents/admin/assets/css/argon.css?v=1.2.0" type="text/css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGpSOzRNdGwwblnCYnKK808Jv8ACsjvrM"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>