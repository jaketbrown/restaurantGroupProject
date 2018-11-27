<?php
require('database.php');

getUserInfo($_SESSION['username']);
$name = $_SESSION['name'];
$bio = $_SESSION['bio'];
$profilepic = $_SESSION['profilepic'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kalimotxo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CDN to Bootstrap 4.1.3, Fontawesome 5.5, Jquery 3.3.1 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="menu.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm fixed-top bg-dark navbar-dark">
  <a class="navbar-brand" href="main.php">Kalimotxo</a>
  <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="takeOutOrder.html">Order Online</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main.php">About</a>
      </li>
	  <li class="nav-item">
			<a class="nav-link" href="main.php"><span class="fas fa-sign-out-alt"></span> Logout</a>
	  </li>
	</ul>
  </div>
</nav>
<br/>
<br/>
<br/>
<br/>
<div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo $pic;?>" alt="" width="300" height="300" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $name;?>
                                    </h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Edit</a>
                                </li>
                            </ul>
                        </div>
						<br/>

						<div class="col-md-8">
							<div class="tab-content profile-tab" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><Strong>User Name:</Strong></label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $_SESSION['username'];?></p>
                                        </div>
                                    </div>
									<br/>
									<div class="row">
										<div class="col-md-6">
                                            <label><Strong>Name:</Strong></label>
                                        </div>
                                        <div class="col-md-6">
											<p><?php echo $name;?></p>
                                        </div>
                                    </div>
									<br/>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><Strong>Email:</Strong></label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $email;?></p>
                                        </div>
                                    </div>
									<br/>
									<div class="row">
										<div class="col-md-12">
											<label><Strong>Your Bio:</Strong></label><br/>
											<p><?php echo $bio;?></p>
										</div>
									</div>
								</div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<form action=<?php echo $_SERVER['PHP_SELF'];?> method="post">
									<div class="row">
										<div class="col-md-6">
                                            <label><Strong>Change Password:</Strong></label>
                                        </div>
                                        <div class="col-md-6">
											<input type="text" id="changePassword" name="changePassword"></input>
                                        </div>
                                    </div>
									<br/>
									<div class="row">
										<div class="col-md-6">
                                            <label><Strong>Confirm Password:</Strong></label>
                                        </div>
                                        <div class="col-md-6">
											<input type="text" id="confirmChangePassword" name="confirmChangePassword"></input>
                                        </div>
                                    </div>
									<br/>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><Strong>Change Email:</Strong></label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" id="changeEmail" name="changeEmail"></input>
                                        </div>
                                    </div>
									<br/>
									<div class="row">
										<div class="col-md-6">
                                            <label><Strong>Change Picture:</Strong></label>
										</div>
										<div class="col-md-4">
											<input class="btn" type="file" id="changePic" name="changePic"/>
										</div>
									</div>
									<br/>
									<div class="row">
										<div class="col-md-12">
											<label><Strong>Your Bio:</Strong></label><br/>
											<textarea type="text" rows="5" cols="50" id="changeBio" name="changeBio"></textarea>
										</div>
									</div>
									<br/>

											<button type="submit" id="saveProfile" name="saveProfile">Save Profile</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
	</body>
</html>



<?php


if (isset($_POST['saveProfile'])) {

	/*if(isset($_POST['changePic']) && $_POST['changePic'] != "") {
		echo "here1";
		changeProfilePic($_SESSION['username'], $_POST['changePic']);
	}
	if(isset($_POST['changeBio']) && $_POST['changeBio'] != "") {
		changeBio($_SESSION['username'], $_POST['changeBio']);
	}*/

	if(isset($_POST['changeEmail'])) {
		$username = trim($_SESSION['username']);
		$email = trim($_POST['changeEmail']);

		// changeEmail($username, $email);
    echo $username;
	}


	/*if(isset($_POST['changePassword']) && isset($_POST['changeConfirmPassword']) && $_POST['changePassword'] != "" && $_POST['changeConfirmPassword']) {
		if($_POST['changePassword'] === $_POST['changeConfirmPassword']) {
			changePassword($_SESSION['username'], $_POST['changePassword']);
		} else {
			echo "<script>alert('Passwords must match');</script>";
		}
	}*/
}


?>
