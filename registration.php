<!DOCTYPE html>
<html lang="en">
<head>
  <title>CMSC389N</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CDN to Bootstrap 4.1.3, Fontawesome 5.5, Jquery 3.3.1 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="menu.js"></script>
</head>
<body>

<?php

require_once("database.php");

$top = <<<TOP
<form action="{$_SERVER['PHP_SELF']}" method = "post" >
<nav class="navbar navbar-expand-sm fixed-top bg-dark navbar-dark">
  <a class="navbar-brand" href="main.html">LogoGoesHere</a>
  <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Order Online</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><span class="fas fa-sign-in-alt"></span> Login</a>
    </li>
  </ul>
  </div>
</nav>
<br/>
<div class="container" style="margin-top:50px;" align="center">

  <!-- 1st row -->
    <div class="col-sm-6">
      <fieldset >

  <legend>Register</legend>

  <label for='rName' >Your Full Name: </label>
  <input type='text' name='rName' id='rName' maxlength="50" />
  <br>
  <label for='rEmail' >Email Address:</label>
  <input type='text' name='rEmail' id='rEmail' maxlength="50" />
  <br>
  <label for='rUsername' >Username:</label>
  <input type='text' name='rUsername' id='rUsername' maxlength="50" />
  <br>
  <label for='rPassword' >Password:</label>
  <input type='password' name='rPassword' id='rPassword' maxlength="50" />
  <br>
  <label for='rConPassword' >Confirm Password:</label>
  <input type='password' name='rConPassword' id='rConPassword' maxlength="50" />
  <br>
  <input type='submit' name='submit' value='Submit' />
  </fieldset>

TOP;
$bot = "";

if (isset($_POST["submit"])) {
  $_SESSION["rUsername"] = $_POST["rUsername"];
  $_SESSION["rPassword"] = $_POST["rPassword"];
  $_SESSION["rName"] = $_POST["rName"];
  $_SESSION["rEmail"] = $_POST["rEmail"];
  $_SESSION["rConPassword"] = $_POST["rConPassword"];

  if ($_SESSION["rConPassword"] == $_SESSION["rPassword"]) {
    if (!getUser($_SESSION["rUsername"])) {
      register($_SESSION["rUsername"], $_SESSION["rPassword"], $_SESSION["rEmail"], $_SESSION["rName"]);
      $bot .= "New user created!";
    } else {
      $bot .= "User already exists";
    }
  } else {
    $bot .= "Password does not match";
  }

}

echo $top;
echo $bot;
echo "</form>";
?>
</body>
</html>
