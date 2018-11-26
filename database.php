<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "mydb";
$db = mysqli_connect($host, $user, $password, $database) or die("failed to connect to db");


function register($username, $password, $email, $name) {
	global $db;
	$sql = sprintf("INSERT INTO users (username, password, profilepic, bio, email, name) VALUES ('%s', '%s', '', '', '%s' , '%s')", $username, $password, $email, $name);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	} else {
		// $_SESSION['username'] = $username;
		header('Location: main.php');
	}
	mysqli_close($db);
}

function getUserInfo($username) {
	global $db;
	$sql = sprintf("SELECT * FROM users WHERE username='%s'", $username);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	} else {
		while ($mysql_array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$_SESSION['name'] = $mysql_array['name'];
			$_SESSION['email'] = $mysql_array['email'];
			$_SESSION['profilepic'] = $mysql_array['profilepic'];
			$_SESSION['bio'] = $mysql_array['bio'];
	    }
		if ($_SESSION['profilepic'] === "") { //default image;
			$_SESSION['profilepic'] == "https://34yigttpdc638c2g11fbif92-wpengine.netdna-ssl.com/wp-content/uploads/2016/09/default-user-img.jpg";
		}
	}
	mysqli_close($db);
}

function changeProfilePic($username, $profilepic) {
	global $db;
	$sql = sprintf("UPDATE users SET profilepic='%s' WHERE username='%s'", $profilepic, $username);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	} else {
		$_SESSION['profilepic'] = $profilepic;
		header('Location: profile.php');
	}
	mysqli_close($db);
}

function changeEmail($username, $email) {
	global $db;
	$sql = sprintf("UPDATE users SET email='%s' WHERE username='%s'", $email, $username);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	} else {
		$_SESSION['email'] = $profilepic;
		header('Location: profile.php');
	}
	mysqli_close($db);
}


function changeBio($username, $bio) {
	global $db;
	$sql = sprintf("UPDATE users SET bio='%s' WHERE username='%s'", $bio, $username);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	}
	else {
		$_SESSION['bio'] = $bio;
		header('Location: profile.php');
	}
	mysqli_close($db);
}


function changePassword($username, $password) {
	global $db;
	$sql = sprintf("UPDATE users SET password='%s' WHERE username='%s'", $password, $username);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	}
	else {
		$_SESSION['password'] = $password;
		header('Location: profile.php');
	}
	mysqli_close($db);
}

function getPassword($username) {
	global $db;
	$sql = sprintf("SELECT password FROM users WHERE username='%s'", $username);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	}
	else {
		while ($mysql_array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			return $mysql_array['password'];
	    }
	}
	mysqli_close($db);
}

function getUser($username) {
	global $db;
	$sql = sprintf("SELECT username FROM users WHERE username='%s'", $username);
    $result = mysqli_query($db, $sql);
	if(!$result) {

	}
	else {
		while ($mysql_array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			return true;
	    }
		return false;
		// if(mysqli_fetch_array($result) != false)
		// 	return true;
		// return false;
	}
	mysqli_close($db);
}
?>
