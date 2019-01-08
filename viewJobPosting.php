<?php session_start() ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>JCU Singapore Job Portal</title>
    <link href="css/external.css" rel="stylesheet"/>
    <link href="css/nav.css" rel="stylesheet"/>
    <link href="css/media.css" rel="stylesheet"/>
    <style>
        table { border-collapse: collapse; border-spacing: 0; font-family: Futura, Arial, sans-serif; }
        caption { font-size: larger; margin: 1em auto; }
        th, td { padding: .75em; }0
        th { background: linear-gradient(#ccc,##777); color: #000; }
        th:first-child { border-radius: 9px 0 0 0; }
        th:last-child { border-radius: 0 9px 0 0; }
        tr:last-child td:first-child { border-radius: 0 0 0 9px; }
        tr:last-child td:last-child { border-radius: 0 0 9px 0; }
        tr:nth-child(odd) { background: #ccc; }
    </style>
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

            if (mysqli_num_rows($result_job_data) > 0) {
                echo "<table width = 100%>
                        <tr>
						<th>Job Name</th>
                        <th>Date Posted</th>
                        <th>Job Type</th>
						<th>Salary</th>
						<th>Contract Length</th>
						<th>Description</th>
						<th>Requirement</th></tr>";
                while ($jobdata = mysqli_fetch_array($result_job_data)) {
                    $company_name = $jobdata['company_name'];
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
							<td>$salary</td>
							<td>$contract</td>
							<td>$description</td>
							<td>$requirement</td>
						  </tr>";
                }
                echo "</table>";
            }
                ?>
        </center>
    </div>
    <aside>
        <center>
        <?php include('includes/sidepanel.php') ?>
        </center>
    </aside>
</section>

<footer id="footer">
    <?php include('includes/footer.php') ?>
</footer>

</body>
</html>