<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>logged in</title>
<link href="./css/login.css" rel="stylesheet">
</head>
<body>
<div class="background"></div>
        <div class="background background2"></div>
        <div class="background background3"></div>
<div class="log">
<h1>Congratulation! You have logged into password protected page. </h1>
<br>
<a href="level1.php" class="next">Let's Play </a>
<br>
<a href="logout.php" class="next">Logout </a>

</div>
<br>

</body>
</html>



