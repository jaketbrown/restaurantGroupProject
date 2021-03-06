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
		$mysql_array = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $mysql_array;

	}
	mysqli_close($db);
}

function changeProfilePic($username, $profilepic) {
	global $db;
	$a = "0x";
	$handle = @fopen($profilepic, 'rb');
	$content = @fread($handle, filesize($profilepic));
	$t = bin2hex($content);
	$z = $a . "" .$t;
	$sql = "UPDATE users SET profilepic=".$z." WHERE username='".$username."'";
	$result = mysqli_query($db, $sql);
	if(!$result) {
		echo mysqli_error($db);
	} else {
		return true;
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
		return true;
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
		return true;
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
		return true;
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
		return false;
	}
	else {
		while ($mysql_array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			return true;
	    }
		return false;
	}
	mysqli_close($db);
}

function displayImg($username) {
	global $db;
	$sql = sprintf("SELECT profilepic FROM users WHERE username='%s'", $username);
	$sth = $db->query($sql);
	$result=mysqli_fetch_array($sth);
	if($result['profilepic'] == "") {
		return false;
	} else {
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['profilepic'] ).'" width="300" height="300"/>';
		return true;
	}

}


?>
