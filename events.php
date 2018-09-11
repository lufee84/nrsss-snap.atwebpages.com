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

-->

<!DOCTYPE html>


<html lang="en">
<!-- Include Menu -->
<?php include "./menu.php"; ?>
<!-- Include Menu -->

<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/view_feed.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/load.js" type="text/javascript"></script>
	<?php if(isset($_SESSION['postID'])) {
		$postID = $_SESSION['postID'];
		unset($_SESSION['postID']);
		echo "<script type=\"text/javascript\">";
		echo "loadFeed($postID);";
		echo "</script>";
	} else {
		echo "<script type=\"text/javascript\">";
		echo "var str = \"initialize\";";
		echo "loadFeed(str);";
		echo "</script>";
	} ?>
	<title>EVENTS</title>
	</head>
	<body class="wrapper">
		<header>
			<button class="button" id="back_btn" onclick="backBtn()" onkeyup="feedBtnBack(event)">BACK</button>
			<div id="user_profile">
				<img src="<?php echo $_SESSION['userPic'] ?>" alt="User profile image"></img>
				<p><?php echo $_SESSION['userFullName']; ?></p>
			</div>
			<h2>EVENTS</h2>
		</header>
	<section>
		<div id="post_view"><b>Person info will be listed here...</b></div>
	</section>
	</body>
	<script src="js/view_feed.js" type="text/javascript"></script>
	<script src="js/view_feed_heath_new.js" type="text/javascript"></script>
</html>