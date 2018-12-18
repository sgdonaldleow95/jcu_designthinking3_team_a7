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
    <img src="images/banner.jpeg" alt="" width="100%"/>
    <section>
        <div id="content2">
            <br>
            <h2><u><center>JCU Singapore Job Portal Registration Status</center></u></h2>
            <br>
            <center>
            <br><br><br>
            <?php
            include('includes/dbFunctions.php');
            $username = $_POST['username'];
            $password = $_POST['password'];
            $usertype = $_POST['usertype'];
            $email = $_POST['email'];
            $squestions = $_POST['squestion'];
            $sanswers = $_POST['sanswer'];

            $password2 = SHA1($password);

            $query = "SELECT username FROM registered_users WHERE username = '$username'";
            $results = mysqli_query($link, $query) or die(mysqli_error($link));

            $color = "black";
            if (mysqli_num_rows($results) > 0){

                echo "<font color=".$color."><b>Username Found. You have created an account before.</b></font>";
                header('Refresh: 2; url=index.php');
            }
            else {
                $insertQuery = "INSERT INTO registered_users (username, password, email, user_type, forget_password_question, forget_password_answer) VALUES ('$username', '$password2', '$email', '$usertype','$squestions', '$sanswers')";
                $result = mysqli_query($link, $insertQuery) or die(mysqli_error($link));
                echo "<font color=".$color."><b>Registered. You will be redirected soon.</b></font>";

                header('Refresh: 2; url=index.php');
            }

            ?>
            <br><br><br><br><br><br>
            </center>
        </div>
    </section>
        <footer id="footer">
            <?php include('includes/footer.php') ?>
        </footer>
</body>
</html>