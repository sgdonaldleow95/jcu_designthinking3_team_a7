
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
    <div id="content2">
        <br>
        <h2><u><center>JCU Singapore Job Portal Registration</center></u></h2>
        <br>
        <center>
            <form name='register' method='post' action='doRegister.php'>
                <table>
                    <tr>
                        <td><input type="radio" name="usertype" value="1" required><b>Student &nbsp;&nbsp;</b></td>
                        <td><input type="radio" name="usertype" value="2"><b>Company</b></td>
                    </tr>
                </table>
                <br>
                <br>
                <table>
                    <tr>
                        <td><font color='black'>Username: </font></td>
                        <td><input name='username' type='text' size='20' placeholder='Username' required></td>
                    </tr>
                    <tr>
                        <td><font color='black'>Password :</font></td>
                        <td> <input name='password' type='password' placeholder='Password' required></td>
                    </tr>
                    <tr>
                        <td><font color='black'>Email Address: </font></td>
                        <td><input name='email' type='email' size='20' placeholder='Email Address' required></td>
                    </tr>
                    <tr>
                        <td><font color='black'>Security Question:</font></td>
                        <td> <select name='squestion'>
                                <option value='' disabled selected>Select your question</option>
                                <option value='1'>What is your favorite colour?</option>
                                <option value='2'>When did you start bowling?</option>
                                <option value='3'>What is your mother's maiden name?</option>
                                <option value='4'>What is your pet's name?</option>
                                <option value='5'>What is your primary school?</option></td>
                    </tr>
                    <tr>
                        <td><font color='black'>Security Answer:</font></td>
                        <td><input name='sanswer' type='text' placeholder='Your Answer' required></td>
                    </tr>
                </table>
                <br>
                <a href='index.php'> <button class="button" input type='button'>Back</button></a>
                <button class="button" input name='submit' type='submit'>Register</button><br><br>


            </form>
            <br>
        </center>

    </div>
</section>
<footer id="footer">
    <?php include('includes/footer.php') ?>
</footer>
</body>
</html>
