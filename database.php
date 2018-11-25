<?php
session_start();

$host = "localhost";
$user = "dbuser";
$password = "goodbyeWorld";
$database = "applicationdb";
$db = mysqli_connect($host, $user, $password, $database) or die("failed to connect to db");


function register($username, $password, $email) {
	global $db;
	$sql = sprintf("INSERT INTO users (username, password, profilepic, bio, email) VALUES ('%s', '%s', '', '', '%s')", $username, $password, $email);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	} else {
		header('Location: login.php');	
	}
	mysqli_close($db);
}

function changePassword($username, $password) {
	global $db;
	$sql = sprintf("UPDATE users SET password='%s' where username='%s'", $password, $username, $email);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	}
	else {
		header('Location: profile.php');		
	}
	mysqli_close($db);
}

function changeProfilePic($username, $profile) {
	global $db;
	$sql = sprintf("UPDATE users SET profilepic='%s' where username='%s'", $profile, $username);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	}
	else {
		header('Location: profile.php');		
	}
	mysqli_close($db);
}


function changeBio($username, $bio) {
	global $db;
	$sql = sprintf("UPDATE users SET bio='%s' where username='%s'", $bio, $username);
    $result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	}
	else {
		header('Location: profile.php');		
	}
	mysqli_close($db);
}





?>