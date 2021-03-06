<!DOCTYPE html>
<html lang="en">
<head>
	<title>CMSC389N</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CDN to Bootstrap 4.1.3, Fontawesome 5.5, Jquery 3.3.1 -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="module" src="menu.js"></script>
</head>
<body>

<?php
require_once("database.php");
$_SESSION["loggedIn"] = false;
if ($_SESSION["loggedIn"] == true) {
  header("Location: profile.php");
} else {
$top = <<<TOP
<form action="{$_SERVER['PHP_SELF']}" method = "post" >
<nav class="navbar navbar-expand-sm fixed-top bg-dark navbar-dark">
  <a class="navbar-brand" href="about.php">Kalimotxo</a>
  <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="takeOutOrder.php">Order Online</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">My Profile</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
    </li>
  </ul>
  </div>
</nav>
<br/>
<div class="container" style="margin-top:50px;" align="center">
  <!-- 1st row -->
    <div class="col-sm-6">
      <h4><em>Login</em></h3>
    <br/>
    <input type="username" id="username" placeholder="Enter username" name = "username" required/ size=25%>
    <br/>
	<br/>
    <input type="password" id="password" placeholder="Enter password" name = "password" required/ size=25%>
    <br/>
    <br/>
    <input type="submit" name = "login" value = "Login" id="login">

    <br/>
    <a href="registration.php">Create an account</a>
    </br>
TOP;
}
$bot = "";
if (isset($_POST["login"])) {
  $_SESSION["username"] = $_POST["username"];
  $_SESSION["password"] = $_POST["password"];
  $_SESSION["loggedIn"] = false;
  $passwordCheck = getPassword($_SESSION["username"]);
  if (getUser($_SESSION["username"])) {
    if ($_SESSION["password"] == $passwordCheck) {
      $_SESSION["loggedIn"] = true;
      header("Location: profile.php");
    } else {
  $bot .= <<<BOT
    <strong>Username or password is incorrect</strong>
BOT;
    }
  } else {
  $bot .= <<<BOT
    <strong>Username or password is incorrect</strong> <br>
BOT;
  }
}
echo $top;
echo $bot;
echo "</form>";
?>
</body>
</html>
