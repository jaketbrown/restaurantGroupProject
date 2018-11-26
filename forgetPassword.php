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
      <h4><em>Please enter your email</em></h3>


	  <br/>
    <input type="email" id="email" placeholder="Enter email" name = "email" required/ size=25%>
    <br/>
    <input type="email" id="confirmEmail" placeholder="Confirm email" name = "confirmEmail" required/ size=25%>
    <br/>
    <br/>
	  <button id="change" class="button" onclick=changePassword()>Submit</button>
    <br/>
    <br/>
    <button id="change" class="button" onclick="location.href='login.php'">Login</button>

<script>
  function changePassword() {

    var email1 = document.getElementById("email");
    var email2 = document.getElementById("confirmEmail");
    if (checkEmail()) {
      if (email1.value == email2.value ) {
        email1.placeholder="New password";
        email1.id="newPassword";
        email1.value="";
        email2.placeholder="Confirm password";
        email2.id="confirmNewPassword";
        email2.value="";
      } else {
        alert("Email must match");
      }
    }
  }

  function checkEmail() {
    var email1 = document.getElementById("email");
    var email2 = document.getElementById("confirmEmail");
    if (email1.value == "") {
      alert("Please enter an email");
      return false;
    } else if (email2.value == "") {
      alert("Please confirm your email");
      return false;
    } else {
      return true;
    }
  }
</script>
</body>
</html>
