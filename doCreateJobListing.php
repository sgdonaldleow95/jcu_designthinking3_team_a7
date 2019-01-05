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
                $msg = "Job Listing have been created";

                $companyid = $_SESSION['id'];
                $jname = $_POST['jobname'];
                $date = $_POST['date'];
                $jobtype = $_POST['jobtype'];
                $location = $_POST['location'];
                $workhours = $_POST['workhours'];
                $salary = $_POST['salary'];
                $duration = $_POST['duration'];
                $description = $_POST['description'];
                $requirement = $_POST['requirement'];

                $insertQuery = "INSERT INTO job_opportunity (job_name, date_posted, company_id, job_type, location, working_hours, salary, contract_length, job_scope_description, job_requirement) VALUES ('$jname', '$date', '$companyid', '$jobtype', '$location', '$workhours', '$salary', '$duration', '$description', '$requirement')";

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