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

	<div class="sidenav">
	  <br><br>
	  <h1>Order</h1>
		<div id="Burrito"></div>
	  <div id="Taco"></div>
	  <div id="Quesadilla"></div>
	  <div id="Paella"></div>
	  <div id="Nachos"></div>
	  <div id="Spanish Omelette"></div>

	  <div class="fixed">
		<div id="total"><h1>Total: $0</h1></div>
		<div>
			&nbsp;&nbsp;&nbsp;
			<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
				<input type="hidden" id="orderArr" name="orderArr"></input>
				<input type="submit" id="placeOrder" value="Place Order"></input>
			</form>
		</div>
	  </div>
	</div>

	<br>

	<h1>Order</h1>
	<h3>Classic Dishes</h3>

	<div class="row">
	  <div class="column">
		<img src="burritos.jpg" alt="Burrito" id="burrito" style="width:100%">
	  </div>

	  <div class="column">
		<img src="tacos.jpg" alt="Taco" id="taco" style="width:100%; height: 75%">
	  </div>

	  <div class="column">
		<img src="quesadilla.jpg" alt="Quesadilla" id="quesadilla" style="width:100%">
	  </div>

</div>
<div class="row">
	<div class="space_lg2">&nbsp;</div>
	<div class="space_lg3">&nbsp;</div>
	<h5>Burrito ($15)</h5>
	<div class="space_lg">&nbsp;</div>
	<div class="space_lg2">&nbsp;</div>
	<h5>Taco ($13)</h5>
	<div class="space_lg">&nbsp;</div>
	<div class="space_lg2">&nbsp;</div>
	<h5>Quesadilla ($18)</h5>
</div>

<div class="row">
	<div class="space_lg2">&nbsp;</div>
	<div class="space_lg2">&nbsp;</div>

	<input type="button" value="-" id="mBU">
	&nbsp;
	<div id="numBU">0</div>
	&nbsp;
	<input type="button" value="+" id="pBU">

	<div class="space_lg">&nbsp;</div>
	<div class="space_lg2">&nbsp;</div>
	<div class="space_lg3">&nbsp;</div>

	<input type="button" value="-" id="mTA">
	&nbsp;
	<div id="numTA">0</div>
	&nbsp;
	<input type="button" value="+" id="pTA">

	<div class="space_lg">&nbsp;</div>
	<div class="space_lg">&nbsp;</div>

	<input type="button" value="-" id="mQU">
	&nbsp;
	<div id="numQU">0</div>
	&nbsp;
	<input type="button" value="+" id="pQU">
</div>

<br><br>
<h3>Signature Dishes</h3>

<div class="row">
	<div class="column">
	<img src="paella1.jpg" alt="Paella" id="paella" style="width:100%">
	</div>

	<div class="column">
	<img src="nachos.jpg" alt="Nachos" id="nachos" style="width:100%; height:92%">
	</div>

	<div class="column">
	<img src="spanishOmelette.jpg" alt="Spanish Omelette" id="sO" style="width:100%">
	</div>

</div>
<div class="row">
	<div class="space_lg2">&nbsp;</div>
	<div class="space_lg3">&nbsp;</div>
	<h5>Paella ($14)</h5>
	<div class="space_lg">&nbsp;</div>
	<div class="space_lg2">&nbsp;</div>
	<h5>Nachos ($15)</h5>
	<div class="space_lg">&nbsp;</div>
	<h5>Spanish Omelette ($20)</h5>
</div>

<div class="row">
	<div class="space_lg">&nbsp;</div>

	<input type="button" value="-" id="mPA">
	&nbsp;
	<div id="numPA">0</div>
	&nbsp;
	<input type="button" value="+" id="pPA">

	<div class="space_lg">&nbsp;</div>
	<div class="space_lg2">&nbsp;</div>
	<div class="space_lg3">&nbsp;</div>

	<input type="button" value="-" id="mNA">
	&nbsp;
	<div id="numNA">0</div>
	&nbsp;
	<input type="button" value="+" id="pNA">

	<div class="space_lg">&nbsp;</div>
	<div class="space_lg">&nbsp;</div>

	<input type="button" value="-" id="mSO">
	&nbsp;
	<div id="numSO">0</div>
	&nbsp;
	<input type="button" value="+" id="pSO">
</div>
<br>

<script>
	let arr = [];
	arr["numBU"] = arr["numTA"] = arr["numQU"] = arr["numPA"] = arr["numNA"] = arr["numSO"] = 0;
	//console.log(arr);
	//let arr2 = ["numBU", "numTA", "numQU", "numPA", "numNA", "numSO"];
	//let names = ["Burrito", "Taco", "Quesadilla", "Paella", "Nachos", "Spanish Omelette"];

	main();

	function main() {
		console.log("hey");
		document.getElementById("mBU").addEventListener("click", function() {line(false, "numBU", "Burrito");});
		document.getElementById("pBU").addEventListener("click", function() {line(true, "numBU", "Burrito");});
		document.getElementById("mTA").addEventListener("click", function() {line(false, "numTA", "Taco");});
		document.getElementById("pTA").addEventListener("click", function() {line(true, "numTA", "Taco");});
		document.getElementById("mQU").addEventListener("click", function() {line(false, "numQU", "Quesadilla");});
		document.getElementById("pQU").addEventListener("click", function() {line(true, "numQU", "Quesadilla");});

		document.getElementById("mPA").addEventListener("click", function() {line(false, "numPA", "Paella");});
		document.getElementById("pPA").addEventListener("click", function() {line(true, "numPA", "Paella");});
		document.getElementById("mNA").addEventListener("click", function() {line(false, "numNA", "Nachos");});
		document.getElementById("pNA").addEventListener("click", function() {line(true, "numNA", "Nachos");});
		document.getElementById("mSO").addEventListener("click", function() {line(false, "numSO", "Spanish Omelette");});
		document.getElementById("pSO").addEventListener("click", function() {line(true, "numSO", "Spanish Omelette");});
		document.getElementById("placeOrder").addEventListener("click", function() {alert("Order Placed");});
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

let totalNum = arr["numBU"] * 15 + arr["numTA"] * 13 + arr["numQU"] * 18
+ arr["numPA"] * 14 + arr["numNA"] * 15 + arr["numSO"] * 20;
document.getElementById("total").innerHTML = "<h1>Total: $" + totalNum + "</h1>";
}
</script>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
			if ($_POST['orderArr']) {
				$_SESSION['orderArr'] = $_POST['orderArr'];
			}
		}
	}
?>
</body>
</html>
