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
            $msg = "You have successfully applied for this job";

            $studentid   = $_SESSION['id'];
            $companyid = $_POST['companyid'];
            $jobid = $_POST['application'];

            $insertQuery = "INSERT INTO job_application (student_id, employer_id, job_id, status) VALUES ('$studentid', '$companyid', '$jobid', '0')";

            $result = mysqli_query($link, $insertQuery) or die(mysqli_error($link));


            ?>
            <br>
            <h3>Job Listing's Status</h3>
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