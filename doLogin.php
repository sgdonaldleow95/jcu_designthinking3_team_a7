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
        <center>

            <br><br><br><br>
            <?php
            session_start();
            include('includes/dbFunctions.php');
            $username = $_POST['username'];
            $password1 = $_POST['password'];

            $password2 = SHA1($password1);

            $query = "SELECT * FROM registered_users WHERE username = '$username' and password = '$password2'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            $color = "black";
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $_SESSION['name'] = $row['username'];
                $_SESSION['usertype'] = $row['usertype'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];

                echo "<font color=".$color."><b>Welcome, ".$row['username']."</b><br></font><br>";
                echo "<font color=".$color."><b>You will be redirected</b></font><br><br><br>";
                header('Refresh: 3; url=index.php');
            } else {
                echo "<font color=".$color."><b>Wrong Password</b></font>";
                header('Refresh: 2; url=index.php');
            }
            ?>
            <br><br><br><br>
        </center>
    </div>
</section>
<footer>
    <?php include('includes/footer.php') ?>
</footer>
</body>
</html>