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
	    <img id="img1" src="images/banner.jpg" width="100%">
	</header>
<nav>
    <?php include('includes/nav.php') ?>
</nav>
<section>
	<div id="content">
	    <br>
        <center><h3><u>JCU Singapore Job Portal</u></h3></center>
        <br>
        <p>Searching for a job or looking for potential employees?</p>
	</div>
<aside>
    <center><h3><font color="#000">Portal Credentials</font></h3>
	<hr>
	<br>
        <form name="login" method="post" action="doLogin.php">
            <fieldset>
                <table>
                    <tr>
                        <td><font color="black">Username :</font></td>
                        <td><input name="username" type="text" size="20" placeholder="Username" required></td>
                    </tr>
                    <tr><td><font color="black">Password :</font></td>
                        <td> <input name="password" type="password" placeholder="password" required></td>
                    </tr>
                </table>
                <button class="button" input name="submit" type="submit"><b>Log In</b></button>
                <a href="registration.php"><button class="button" input type="button"><b>Register</b></button></a><br>
                <a href="forgetPassword.php"><button class="button" input type="button"><b>Forget Password?</b></button></a>
            </fieldset>
        </form>

        <br>
	<br>
	<br>
	</center>
</aside>
</section>
<footer id="footer">
	<?php include('includes/footer.php') ?>
</footer>
</body>
</html>
