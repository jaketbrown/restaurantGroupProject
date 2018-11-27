<!DOCTYPE html>
<html>
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
			* {
				box-sizing: border-box;
			}

			body {
				padding-left: 50px;
				padding-right: 200px;
				padding-top: 50px;
			}

			body h1, h2, h3, h5 {
				color: #282f3a;
			}

			.column {
				position: relative;
				float: left;
				width: 23%;
				margin-right: 15px;
			}

			/* Clearfix (clear floats) */
			.row::after {
				content: "";
				clear: both;
				display: table;
			}

			.sidenav {
				height: 100%;
				width: 350px;
				position: fixed;
				z-index: 1;
				top: 0;
				right: 0;
				background-color: #282f3a;
				overflow-x: hidden;
				padding-top: 20px;
				padding-left: 5px;

			}

			.sidenav h1 {
				padding: 6px 8px 6px 16px;
				text-decoration: none;
				font-size: 25px;

				color: #a8a8a8;
				display: block;
			}

			.sidenav p {
				padding: 0px 8px 6px 16px;
				text-decoration: none;
				font-size: 22px;

				color: #818181;
				display: block;
			}

			.sidenav a:hover {
				color: #f1f1f1;
			}

			.space_lg {
				width:105px;
			}

			.space_lg2 {
				width:50px;
			}

			.space_lg3 {
				width:25px;
			}

			div.fixed {
				position: fixed;
				bottom: 10px;
				right: 20px;
				width: 300px;
			}

		</style>

	</head>

<body>
	<?php
	require_once('database.php');
	?>
	<nav class="navbar navbar-expand-sm fixed-top bg-dark navbar-dark">
	  <a class="navbar-brand" href="main.html">LogoGoesHere</a>
	  <div class="collapse navbar-collapse justify-content-end">
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" href="takeOutOrder.php">Order Online</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="about.php">About</a>
		  </li>
			<li class="nav-item">
        <a class="nav-link" href="profile.php">My Profile</a>
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

	<div class="sidenav">
	  <br><br>
	  <h1>Order</h1>
	  <div id="Penne Rosa"></div>
	  <div id="Buttered Noodles"></div>
	  <div id="Steak Stroganoff"></div>
	  <div id="Pan Noodles"></div>
	  <div id="Pad Thai"></div>
	  <div id="Green Curry"></div>

	  <div class="fixed">
		<div id="total"><h1>Total: $0</h1></div>
		<div>
			&nbsp;&nbsp;&nbsp;
			<input type="button" value="Place Order">
		</div>
	  </div>
	</div>

	<br>

	<h1>Order</h1>
	<h3>Classic Noodles</h3>

	<div class="row">
	  <div class="column">
		<img src="penneRosa.jpg" alt="Penne Rosa" id="penne" style="width:100%">
	  </div>

	  <div class="column">
		<img src="butteredNoodles.jpg" alt="Buttered Noodles" id="butter" style="width:100%;">
	  </div>

	  <div class="column">
		<img src="steakStroganoff.jpg" alt="Steak Stroganoff" id="steak" style="width:100%">
	  </div>

	</div>
	<div class="row">
		<div class="space_lg2">&nbsp;</div>
		<div class="space_lg3">&nbsp;</div>
		<h5>Penne Rosa ($15)</h5>
		<div class="space_lg2">&nbsp;</div>
		<div class="space_lg3">&nbsp;</div>
		<h5>Buttered Noodles ($13)</h5>
		<div class="space_lg2">&nbsp;</div>
		<div class="space_lg3">&nbsp;</div>
		<h5>Steak Stroganoff ($18)</h5>
	</div>

	<div class="row">
		<div class="space_lg">&nbsp;</div>

		<input type="button" value="-" id="mPR">
		&nbsp;
		<div id="numPR">0</div>
		&nbsp;
		<input type="button" value="+" id="pPR">

		<div class="space_lg">&nbsp;</div>
		<div class="space_lg">&nbsp;</div>

		<input type="button" value="-" id="mBN">
		&nbsp;
		<div id="numBN">0</div>
		&nbsp;
		<input type="button" value="+" id="pBN">

		<div class="space_lg">&nbsp;</div>
		<div class="space_lg">&nbsp;</div>

		<input type="button" value="-" id="mSS">
		&nbsp;
		<div id="numSS">0</div>
		&nbsp;
		<input type="button" value="+" id="pSS">
	</div>

	<br><br>
	<h3>Asian Noodles</h3>

	<div class="row">
	  <div class="column">
		<img src="japPan.jpg" alt="Japan Pan" id="pan" style="width:100%">
	  </div>

	  <div class="column">
		<img src="padThai.jpg" alt="Pad Thai" id="pad" style="width:100%;">
	  </div>

	  <div class="column">
		<img src="greenCurry.jpg" alt="Green Curry" id="curry" style="width:100%">
	  </div>

	</div>
	<div class="row">
		<div class="space_lg2">&nbsp;</div>
		<h5>Pan Noodles ($14)</h5>
		<div class="space_lg">&nbsp;</div>
		<div class="space_lg3">&nbsp;</div>
		<h5>Pad Thai ($15)</h5>
		<div class="space_lg">&nbsp;</div>
		<div class="space_lg3">&nbsp;</div>
		<h5>Green Curry ($20)</h5>
	</div>

	<div class="row">
		<div class="space_lg">&nbsp;</div>

		<input type="button" value="-" id="mJP">
		&nbsp;
		<div id="numJP">0</div>
		&nbsp;
		<input type="button" value="+" id="pJP">

		<div class="space_lg">&nbsp;</div>
		<div class="space_lg">&nbsp;</div>

		<input type="button" value="-" id="mPT">
		&nbsp;
		<div id="numPT">0</div>
		&nbsp;
		<input type="button" value="+" id="pPT">

		<div class="space_lg">&nbsp;</div>
		<div class="space_lg">&nbsp;</div>

		<input type="button" value="-" id="mGC">
		&nbsp;
		<div id="numGC">0</div>
		&nbsp;
		<input type="button" value="+" id="pGC">
	</div>
	<br>

	<script>
		let arr = [];
		arr["numPR"] = 0;
		arr["numBN"] = 0;
		arr["numSS"] = 0;
		arr["numJP"] = 0;
		arr["numPT"] = 0;
		arr["numGC"] = 0;

		main();

		function main() {
			console.log("hey");
			document.getElementById("mPR").addEventListener("click", function() {line(false, "numPR", "Penne Rosa");});
			document.getElementById("pPR").addEventListener("click", function() {line(true, "numPR", "Penne Rosa");});
			document.getElementById("mBN").addEventListener("click", function() {line(false, "numBN", "Buttered Noodles");});
			document.getElementById("pBN").addEventListener("click", function() {line(true, "numBN", "Buttered Noodles");});
			document.getElementById("mSS").addEventListener("click", function() {line(false, "numSS", "Steak Stroganoff");});
			document.getElementById("pSS").addEventListener("click", function() {line(true, "numSS", "Steak Stroganoff");});

			document.getElementById("mJP").addEventListener("click", function() {line(false, "numJP", "Pan Noodles");});
			document.getElementById("pJP").addEventListener("click", function() {line(true, "numJP", "Pan Noodles");});
			document.getElementById("mPT").addEventListener("click", function() {line(false, "numPT", "Pad Thai");});
			document.getElementById("pPT").addEventListener("click", function() {line(true, "numPT", "Pad Thai");});
			document.getElementById("mGC").addEventListener("click", function() {line(false, "numGC", "Green Curry");});
			document.getElementById("pGC").addEventListener("click", function() {line(true, "numGC", "Green Curry");});
		}


		function line(adding, count, dish) {
			if (adding) {
				arr[count] += 1;
			} else {
				if (arr[count] > 0) {
					arr[count] -= 1;
				}
			}
			console.log(arr);
			if (arr[count] > 0) {
				document.getElementById(dish).innerHTML = "";
				document.getElementById(dish).innerHTML += "<p>" + dish + " x " + arr[count] + "<bR></pr>";
			} else {
				document.getElementById(dish).innerHTML = "";
			}

			document.getElementById(count).innerHTML = arr[count];
			let totalNum = arr["numPR"] * 15 + arr["numBN"] * 13 + arr["numSS"] * 18
				+ arr["numJP"] * 14 + arr["numPT"] * 15 + arr["numGC"] * 20;
			document.getElementById("total").innerHTML = "<h1>Total: $" + totalNum + "</h1>";
		}



	</script>
	</body>
</html>
