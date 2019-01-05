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
    <div id="content">
            <br>
            <center><h2><u>View Job's Listing</u></h2>
            <br><br>
            <?php
            include('includes/dbFunctions.php');
            $companyid = $_SESSION['id'];
            $query_job_data = "SELECT * FROM job_opportunity WHERE company_id = '$companyid'";
            $result_job_data = mysqli_query($link, $query_job_data) or die(mysqli_error($link));

            $query_company_data = "SELECT * FROM company_profile WHERE registered_users_id = '$companyid'";
            $result_company_data = mysqli_query($link, $query_company_data) or die(mysqli_error($link));

            if (mysqli_num_rows($result_company_data) && mysqli_num_rows($result_job_data) > 0) {
                echo "<table border=1>
                        <tr>
						<th>Job Name</th>
                        <th>Date Posted</th>
                        <th>Job Type</th>
                        <th>Location</th>
                        <th>Working Hours</th>
						<th>Salary</th>
						<th>Contract Length</th>
						<th>Description</th>
						<th>Requirement</th></tr>";
                while (($data = mysqli_fetch_array($result_company_data)) && ($jobdata = mysqli_fetch_array($result_job_data))) {
                    $company_name = $data['company_name'];
                    $jobname = $jobdata['job_name'];
                    $date = $jobdata['date_posted'];
                    $jobtype = $jobdata['job_type'];
                    $location = $jobdata['location'];
                    $workhours = $jobdata['working_hours'];
                    $salary = $jobdata['salary'];
                    $contract = $jobdata['contract_length'];
                    $description = $jobdata['job_scope_description'];
                    $requirement = $jobdata['job_requirement'];

                    echo "<tr>
							<td>$jobname</td>
							<td>$date</td>
							<td>$jobtype</td>
							<td>$location</td>
							<td>$workhours</td>
							<td>$salary</td>
							<td>$contract</td>
							<td>$description</td>
							<td>$requirement</td>
						  </tr>
						  </table>";
                }
                } else {
                    ?>
                    Please <b><u><a href="editStudentProfile.php">update</a></u></b> your profile before viewing this page.
                    <br>
                    Thank you.
                    <?php
            }
                ?>

        </center>
    </div>
    <aside>
        <?php include('includes/sidepanel.php') ?>
    </aside>
</section>

<footer id="footer">
    <?php include('includes/footer.php') ?>
</footer>

</body>
</html>