<?php
require_once('database.php');
?>

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
	<style>
		table, th, td {
	    border: 1px solid black;
		}
		td{
			text-align: center;
		}
	</style>
</head>

<body>
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
        <?php if ($_SESSION["loggedIn"] == true) {
          echo "<a class=\"nav-link\" href=\"profile.php\">My Profile</a>";
        } else {
          echo "<a class=\"nav-link\" href=\"login.php\">My Profile</a>";
        }
        ?>
      </li>
	  <li class="nav-item">
      <?php if ($_SESSION["loggedIn"] == true) {
        echo "<a class=\"nav-link\" href=\"login.php\"><span class=\"fas fa-sign-in-alt\"></span> Logout</a>";
      } else {
        echo "<a class=\"nav-link\" href=\"login.php\"><span class=\"fas fa-sign-in-alt\"></span> Login</a>";
      }
      ?>

	  </li>
	</ul>
  </div>
</nav>
<br/>
<div class="container" style="margin-top:50px;" align="center">
	<h3><em>Kalimotxo</em></h3>
	<h4>Authentic Spanish Cuisine<h4>
	<img src="paella.jpg">

 </div>


<div class="container" style="margin-top:50px;" align="left">
	<h3><em>About Kalimotxo</em></h3>
	<p>
		Established in 2010. A few college students from College Park, MD noticed the lack of authentic spanish food in the area and fix this problem. Our food is the new sensation that’s been taking College Park by storm. With all the options you can choose, it’s going to be a fiesta in your mouth. Made with 100% organic materials, you’re guaranteed healthy delicious food. Hope you all enjoy!
	</p>
 </div>

 <div class="container" style="margin-top:50px;" align="center">
	<h3><em>Menu</em></h3>

	<table>
		<tr><strong>Mains</strong></tr>
		<tr>
			<th> Item </th>
			<th> Price </th>
			<th> Image </th>

		</tr>

		<tr>
			<td>Quesadillas</td>
			<td>$18.00</td>
			<td><img src="quesadilla.jpg" style="width:300px;height:300px;"></td>
		</tr>
		<tr>
			<td>Paella</td>
			<td>$14.00</td>
			<td><img src="paella1.jpg" style="width:300px;height:300px;"></td>
		</tr>
		<tr>
			<td>Burritos</td>
			<td>$15.00</td>
			<td><img src="burritos.jpg" style="width:300px;height:300px;"></td>
		</tr>

	</table>

	<table>
		<tr><strong>Sides</strong></tr>
		<tr>
			<td>Tacos</td>
			<td>$13.00</td>
			<td><img src="tacos.jpg" style="width:300px;height:300px;"></td>
		</tr>
		<tr>
			<td>Spanish Omelette</td>
			<td>$20.00</td>
			<td><img src="spanishomelette.jpg" style="width:300px;height:300px;"></td>
		</tr>
		<tr>
			<td>Nachos</td>
			<td>$15.00</td>
			<td><img src="nachos.jpg" style="width:300px;height:300px;"></td>
		</tr>

	</table>


 </div>



<div class="container" style="margin-top:50px;" align="left">
	<div class="col-sm-6">
    	<h4><em>Locations</em></h4>

    	<ul>
    		<li>7950 Baltimore Avenue College Park MD, 20742</li>
    		<li>1000 Hilltop Cir, Baltimore, MD 21250</li>
    		<li>1616 McCormick Dr, Largo, MD 20774</li>
    	</ul>
 </div>


<div class="container" style="margin-top:50px;" align="left">
	 <h4><em>Who to Contact</em></h4>
    	<ul>
    		<li><a href = "mailto: lucianlum97@gmail.com">Lucian Lum </a> Chef</li>
    		<li><a href = "mailto: lucianlum97@gmail.com">Jake Brown </a> Co-Founder </li> <!--REPLACE WITH JAKE'S EMAIL  -->
    		<li><a href = "mailto: pdbhenry@gmail.com">Henry Church </a> Director Of Operations </li>
    		<li><a href = "mailto: 97miguel15@gmail.com">Miguel Villanueva </a> Head of Customer Service </li>
    	</ul>
</div>

<div class="container" style="margin-top:50px;" align="left">
	 <h4><em>Careers</em></h4>
	 <p>Contact us for franchising and other business opportunities!</p>
	 <a href="tel:+1-123-456-7890">Call us!</a> <br>
	 <a href = "mailto: Kalimotxo@gmail.com">Email Us!	</a>


</div>


</body>


</html>
