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
            <center><h2><u>Browse Job's Listing</u></h2>
            <br><br>
                <?php
                include('includes/dbFunctions.php');
                $query = "SELECT * FROM job_opportunity ORDER by date_posted DESC";
                $result = mysqli_query($link, $query) or die(mysqli_error($link));

                if (mysqli_num_rows($result) != 0) {
                    echo "
                    <form name=browseJob method=post action=jobDetails.php>
                    <table width= 100%>
                    <tr>
                    <th>Company</th>
                    <th>Job Name</th>
                    <th>Job Type</th>
                    <th>Salary</th>
                    <th>Application</th>
                    </tr>";
                        while ($row = mysqli_fetch_array($result)) {
                            $jobid = $row['id'];
                            $cname = $row['company_name'];
                            $jname = $row['job_name'];
                            $jobtype = $row['job_type'];
                            $salary = $row['salary'];
                            echo "<tr>
							<td><center>$cname</center></td>                     
							<td><center>$jname</center></td>
							<td><center>$jobtype</center></td>
							<td><center>$salary</center></td>
							<td><center><button class='button' name='application' value='$jobid'>Application</button></center></td>
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