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
    <a href="index.php"><img id="img1" src="images/logo.jpeg" height="120" width="250"></a>
</header>
<nav>
    <?php include('nav.php') ?>
</nav>
<img src="images/banner.jpeg" alt="" width="100%"/>
<section>
    <div id="content2">
        <br>
        <h2><u><center>FruityMates' Wholesale Market Registration</center></u></h2>
        <br>
        <center>
            <br><br><br>
            <?php
            include('dbFunctions.php');
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];

            $squestions = $_POST['squestion'];
            $sanswers = $_POST['sanswer'];
            $password2 = SHA1($password);

            $query = "SELECT username FROM registered_user WHERE username = '$username'";
            $results = mysqli_query($link, $query) or die(mysqli_error($link));

            $color = "black";
            if (mysqli_num_rows($results) > 0){

                echo "<font color=".$color."><b>Username Found. You have created an account before.</b></font>";
                header('Refresh: 2; url=index.php');
            }
            else {
                $insertQuery = "INSERT INTO registered_user (fullname, username, password, contact, email, securityquestion, answer, role, company_name) VALUES ('$fullname', '$username', '$password2', '$contact', '$email', '$squestions', '$sanswers', 1, NULL)";
                $result = mysqli_query($link, $insertQuery) or die(mysqli_error($link));
                echo "<font color=".$color."><b>Registering...</b></font>";

                header('Refresh: 2; url=registered.php');
            }

            ?>
            <br><br><br><br><br><br>
        </center>
        </article>
        <footer>
            <?php include('footer.php') ?>
        </footer>
</body>
</html>