<?php include '../../contents/electron/html/menu.html';

error_reporting(0);
ob_start();
session_start();
$_SESSION['timeout'] = time();

if ($_SESSION['Username'] != null) {
	header("Location: ../admin/pages/home.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>SPX - Kullanıcı Girişi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../contents/login/images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../contents/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../contents/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../contents/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../../contents/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../../contents/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../../contents/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../contents/login/css/main.css">
	<link rel="stylesheet" type="text/css" href="../../contents/custom/login/css/scrollbar.css">
	<link rel="stylesheet" type="text/css" href="../../contents/custom/login/css/login.css">
	<link rel="stylesheet" href="../../contents/electron/css/titleBar.css">

</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../../contents/custom/login/img/cosmohacker_shuttle.png" alt="IMG">
				</div>

				<?php include 'php/login.php'; ?>

			</div>
		</div>
	</div>

	<script src="../../contents/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../contents/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../../contents/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../contents/login/vendor/select2/select2.min.js"></script>
	<script src="../../contents/electron/js/windowScript.js"></script>
	<script src="../../contents/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script src="../../contents/custom/login/js/login.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>

</body>

</html>

<?php

ob_end_flush();

?>