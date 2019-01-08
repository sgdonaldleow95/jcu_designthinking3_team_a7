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
        <center><h2><u>Applicants</u></h2>
            <br><br>
            <?php
            include('includes/dbFunctions.php');
            $companyid = $_SESSION['id'];
            $query = "SELECT * FROM job_application WHERE employer_id = '$companyid'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));

            if (mysqli_num_rows($result) != 0) {
                echo "
                    <form name=viewDetails method=post action=viewDetails.php>
                    <table width= 100%>
                    <tr>
                    <th>Job ID</th>
                    <th>Potential Employer</th>
                    </tr>";
                while ($row = mysqli_fetch_array($result)) {
                    $jobid = $row['job_id'];
                    $studentid = $row['student_id'];
                    echo "<tr>
							<td><center>$jobid</center></td>                     
							<td><center><button class='button' name='viewdetails' value='$studentid'>View Details</button></center></td>
							</tr>";
                }
                echo "</table> </form>";
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