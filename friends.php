<?php 
	ob_start();
	session_start();

	if (!isset($_SESSION['userID'])) {
		header("location: index.php");
		exit();
	}

	$_SESSION["user"] = $_SESSION['userID'];
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	require 'php/pdoconnectOnline.inc';
 ?>
<!--
QUT Capstone Project 2017
Project Owner: Nursery Road State Special School

SNAP - Social Networking Action Platform

Author: Robert Piper
Author: Heath Mayocchi
Author: Levinard Hugo
Author: David Mackenzie	
-->

<!DOCTYPE html>

<html lang="en">

<head>	
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/friends.css">
	<title>SNAP FRIENDS</title>
</head>

<body class="wrapper">
	<header>
		<button class="button" id="back_btn" onclick="backBtn()" onkeyup="viewFriendBtnBack(event)">Back</button>
		<div id="user_profile">
			<img src="<?php echo $_SESSION['userPic'] ?>" alt="User profile image"></img>
			<p><?php echo $_SESSION['userFullName']; ?></p>
		</div>
		<h2>FRIENDS</h2>
	</header>
	
	<section>
		<div id="tableDiv">
		<div id="searchDiv">
		<button id="search_btn" class="button" onclick="admin_search(event)">Search</button>
		<input type="text" id="searchBar" onkeyup="filter(event)" placeholder="Search for names..">
		</div>
		<div id="scollDiv">
			<table id="userNameTable">
				<?php require "php/view_my_friends.php";?>
			</table>
		</div>	
		</div>
	</section>

	<footer>
		<div id="friendButtonDesc">
			<p>View posts from All Friends, or Choose a Friend to view only their posts</p>
		</div>		
		<div id="viewFriendNavigationButtons">
			<button class="button friendButton" id="view_friend_all" onkeyup="viewFriendBtnAll(event)" onclick="viewFriendClickAll()" autofocus>All<br>Friends</button>
			<button class="button friendButton" id="view_friend_next" onkeydown="viewFriendBtnNext(event)" onclick="viewFriendClickNext()">Next<br>Friend</button>
			<button class="button friendButton" id="view_friend_choose" onkeyup="viewFriendBtnChoose(event)" onclick="viewFriendClickChoose()">Choose<br>Friend</button>
		</div>
	</footer>

	<script src="js/viewFriends.js" type="text/javascript"></script>
	<script src="js/user_login.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
</body>

</html>