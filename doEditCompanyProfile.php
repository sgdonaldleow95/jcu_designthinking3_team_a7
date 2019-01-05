<?php session_start() ?>
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
    <a href="index.php"><img id="img1" src="images/banner.jpg" width="100%"></a>
</header>
<nav>
    <?php include('includes/nav.php') ?>
</nav>
<section>
    <div id="content2">
            <br>
            <center>
            <?php
            include('includes/dbFunctions.php');
            $companyid = $_SESSION['id'];
            $query = "SELECT * FROM company_profile WHERE registered_users_id = '$companyid'";

            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            if (mysqli_num_rows($result) > 0) {
                $msg = "You have updated your company's profile";

                        $id = $_SESSION['id'];
                        $cname = $_POST['companyname'];
                        $address = $_POST['location'];
                        $industry = $_POST['industrytype'];
                        $description = $_POST['description'];
                        $website = $_POST['website'];
                        $email = $_POST['email'];

                        $updateQuery = "UPDATE company_profile SET company_name ='$cname', address ='$address', description ='$description', industry = '$industry' , company_website ='$website', email ='$email' WHERE registered_users_id = '$id' ";

                        $result = mysqli_query($link, $updateQuery) or die(mysqli_error($link));

            } else {

                        $msg = "Your company profile had been created";

                        $id = $_SESSION['id'];
                        $cname = $_POST['companyname'];
                        $address = $_POST['location'];
                        $industry = $_POST['industrytype'];
                        $description = $_POST['description'];
                        $website = $_POST['website'];
                        $email = $_POST['email'];

                        $insertQuery = "INSERT INTO company_profile (registered_users_id, company_name, address, description, industry, company_website, email) VALUES ('$id', '$cname', '$address', '$description', '$industry', '$website', '$email')";

                        $result = mysqli_query($link, $insertQuery) or die(mysqli_error($link));
            }

            ?>
            <br>
            <h3>Update Company's Profile Status</h3>
            <br><br>
            <b><?php echo $msg;
                header('Refresh: 3; url=index.php');
                ?></b><br><br><br><br><br>
        </center>
</section>

<footer id="footer">
    <?php include('includes/footer.php') ?>
</footer>

</body>
</html>