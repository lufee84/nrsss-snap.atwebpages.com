<!DOCTYPE html>
<html>
<head>
	<title>SNAP LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/user_login_letter.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body class="wrapper">
	<header>
		<h2>LOGIN</h2>
	</header>

	<section>
		<p id="label">Select the button with the letter of your first or last name</p>
		<p>Or click here to search all users:  <button id="search_btn" class="button" onclick="window.location.href='user_login.php?letter_group=all'">Search</button></p>
		<div id="mainBox">
			<button onclick="window.location.href='user_login.php?letter_group=ABC'" class="letters row1" id="abc" autofocus>A B C</button>
			<button onclick="window.location.href='user_login.php?letter_group=DEF'" class="letters row1" id="def">D E F</button>
			<button onclick="window.location.href='user_login.php?letter_group=GHI'" class="letters row1" id="ghi">G H I</button>
			<button onclick="window.location.href='user_login.php?letter_group=JKL'" class="letters row1" id="jkl">J K L</button>
		</div>
		<div id="mainBox2">
			<button onclick="window.location.href='user_login.php?letter_group=MNO'" class="letters row2" id="mno">M N O</button>
			<button onclick="window.location.href='user_login.php?letter_group=PQRS'" class="letters row2" id="pqrs">P Q R S</button>
			<button onclick="window.location.href='user_login.php?letter_group=TUV'" class="letters row2" id="tuv">T U V</button>
			<button onclick="window.location.href='user_login.php?letter_group=WXYZ'" class="letters row2" id="wxyz">W X Y Z</button>
		</div>
	</section>
	<script type="text/javascript" src="js/user_login_letter.js"></script>
</body>
</html>