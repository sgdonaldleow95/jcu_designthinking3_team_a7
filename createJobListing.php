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
    <img id="img1" src="images/banner.jpg" width="100%">
</header>
<nav>
    <?php include('includes/nav.php') ?>
</nav>
<section>
    <div id="content">
        <br>
        <center>
            <h3><u>Job Listing Details</u></h3>
            <br><br>
            <form name="comapnyProfile" method="post" action="doCreateJobListing.php">
                <table>
                    <tr>
                        <td>Job Name:</td><td><input type='text' name='jobname' placeholder='Name of Job' required></td>
                    </tr>
                    <tr>
                        <td>Date Posted:</td><td><input type="date" name="date" placeholder="Date when job was posted" required></td>
                    </tr>
                    <tr>
                        <td>Job Type:</td><td><input type="text" name="jobtype" placeholder="Type of Job" required> </td>
                    </tr>
                    <tr>
                        <td>Location:</td><td><input type="text" name="location" placeholder="Company Address" required></td>
                    </tr>
                    <tr>
                        <td>Working Hours:</td><td><input type="number" name="workhours" placeholder="Daily work hours" required></td>
                    </tr>
                    <tr>
                        <td>Salary:</td><td><input type="number" name="salary" placeholder="Salary per month($)" required></td>
                    </tr>
                    <tr>
                        <td>Contract Length:</td><td><input type="text" name="duration" placeholder="Contract Duration" required></td>
                    </tr>
                    <tr>
                        <td>Job Scope Description:</td><td><textarea rows="4" cols="40" name="description" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Job Requirement:</td><td><textarea rows="4" cols="40" name="requirement" required></textarea></td>
                    </tr>
                </table>
                <button class="button" input name="submit" type="submit">Submit</button>

            </form>
        </center>
        <br>
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