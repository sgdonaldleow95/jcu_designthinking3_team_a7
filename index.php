<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JCU Singapore Job Portal</title>
		<link href="css/external.css" rel="stylesheet"/>
        <link href="css/nav.css" rel="stylesheet"/>
        <link href="css/media.css" rel="stylesheet"/>

</head>

<body>
	<header>
	<img id="img1" src="images/banner.jpg" height="100%" width="100%">
	</header>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">Browse Jobs</a></li>
		<li><a href="#">FAQ</a></li>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Contact Us</a></li>
	</ul>
</nav>
<section>
	<div id="content">
	<br>
	<center><h3><u>Jobs Listed here</u></h3></center>
	<br>
	</div>
<aside>
	<center>
	<h3><font color="#FFFFFF">Portal Credentials</font></h3>
	<hr>
	<br>
	<form id='login' action='doLogin.php' method='post'>
		<input type='text' name='username' id='username' maxlength='50' placeholder='Username'>
		<input type='password' name='password' id='password' maxlength='50' placeholder='Password'>
		<br><br>
		<button type="submit">Login</button> <button type="submit">Forget Password</button>
		<br><br>
		<button type="submit">Registration</button>
	</form>
	<br>
	<br>
	<br>
	</center>
</aside>
</section>
<footer>
	<?php include('includes/footer.php') ?>
</footer>
</body>
</html>
