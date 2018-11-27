<?php
require_once('database.php');

$arr = getUserInfo($_SESSION['username']);

$name = $arr['name'];
if ($arr['profilepic']) {
	$pic = "https://34yigttpdc638c2g11fbif92-wpengine.netdna-ssl.com/wp-content/uploads/2016/09/default-user-img.jpg";
} else {
	$pic = $arr['profilepic'];
}
$bio = $arr['bio'];
$email = $arr['email'];
$flag = 0;





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
<br/>
<br/>
<br/>
<br/>
<div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                             <?php

							displayImg($_SESSION['username']);
							?>
                        </div>	
				<form method="post" enctype="multipart/form-data">  
                     <input type="file" name="changePic" id="changePic" />  
                     <br />  
					 <br />
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>
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
								<form  action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data" method="post">
									<div class="row">
										<div class="col-md-6">
                                            <label><Strong>Change Password:</Strong></label>
                                        </div>
                                        <div class="col-md-6">
											<input type="password" id="changePassword" name="changePassword"></input>
                                        </div>
                                    </div>
									<br/>
									<div class="row">
										<div class="col-md-6">
                                            <label><Strong>Confirm Password:</Strong></label>
                                        </div>
                                        <div class="col-md-6">
											<input type="password" id="confirmChangePassword" name="confirmChangePassword"></input>
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
<script>
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }
      });  
 });
</script>
<?php


if(isset($_POST["insert"])) {
	if($_FILES['changePic']['tmp_name']) {
		$file = $_FILES['changePic']['tmp_name'];
	    changeProfilePic($_SESSION['username'], $file);
		
	}
}

if (isset($_POST['saveProfile'])) {

	$flag = 0;
	if(isset($_POST['changePassword']) && isset($_POST['confirmChangePassword']) && $_POST['changePassword'] != "" && $_POST['confirmChangePassword'] != "") {
		if($_POST['changePassword'] === $_POST['confirmChangePassword']) {
			changePassword($_SESSION['username'], $_POST['changePassword']);
		} else {
			$flag = 1;
			echo "<script>alert('Passwords must match');</script>";
			
		}
	}
	if(isset($_POST['changeBio']) && $_POST['changeBio'] != "") {
		if ($flag == 0) {
			changeBio($_SESSION['username'], $_POST['changeBio']);
		}
	}
	if(isset($_POST['changeEmail']) && $_POST['changeEmail'] != "") {
		if ($flag == 0) {
			changeEmail($_SESSION['username'], $_POST['changeEmail']);
		}
	}
}



?>