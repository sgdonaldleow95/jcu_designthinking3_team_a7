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
        <center><h2><u>Job's Details</u></h2>
            <br><br>
            <?php
            include('includes/dbFunctions.php');
            $jobid = $_POST['application'];

            $query = "SELECT * FROM job_opportunity WHERE id = $jobid";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));

            if (mysqli_num_rows($result) == 1) {
                while($row = mysqli_fetch_array($result)) {
                    $cid = $row['company_id'];
                    $cname = $row['company_name'];
                    $jname = $row['job_name'];
                    $jobtype = $row['job_type'];
                    $salary = $row['salary'];
                    $location = $row['location'];
                    $workhours = $row['working_hours'];
                    $contract = $row['contract_length'];
                    $description = $row['job_scope_description'];
                    $requirement = $row['job_requirement'];
                }
                echo "<table>
                <tr>
                <td><b>Company Name : </b></td>
                <td>$cname</td>
                </tr>
                <tr>
                <td><b>Job Name : </b></td>
                <td>$jname</td>
                </tr>
                <tr>
                <td><b>Job Type : </b></td>
                <td>$jobtype</td>
                </tr>
                <tr>
                <td><b>Salary : </b></td>
                <td>S$$salary</td>
                </tr>
                <tr>
                <td><b>Location : </b></td>
                <td>$location</td>
                </tr>
                <tr>
                <td><b>Working Hours : </b></td>
                <td>$workhours Hours Per Day</td>
                </tr>
                <tr>
                <td><b>Contract Period : </b></td>
                <td>$contract</td>
                </tr>
                <tr>
                <td><b>Job Description: </b></td>
                <td>$description</td>
                </tr>
                <tr>
                <td><b>Job Requirements: </b></td>
                <td>$requirement</td>
                </tr>
                <tr>
                <td></td>
                <td><form name=doSendApplication method=post action=doSendApplication.php>
                <input type='hidden' name='companyid' value='$cid'>
                <button class='button' name='application' value='$jobid'>Apply for this position</button>
</form> </td>
                </tr>
                </table>";
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