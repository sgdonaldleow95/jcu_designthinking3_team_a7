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

<style>

    .inline-box {
        display: inline-table;
        width: 194px;
        height: 140px;
        border: 2px solid black;
        background-color:aliceblue;
        margin-left: 15px;
        color: black;
    }
    div a:link, a:visited {
        background-color: blue;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    div a:hover, a:active {
        background-color: darkblue;

</style>

<body>
	<header>
	    <img id="img1" src="images/banner.jpg" width="100%">
	</header>
<nav>
    <?php include('includes/nav.php') ?>
</nav>
<section>
	<div id="content">
        <?php if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "1") { ?>
        <br>
        <h2><u><center>JCU Student's Portal</center></u></h2>
        <br><br>

        <div class="inline-box">
            <p><br>NEW JOB<br>BEWARE OF ADDICTION<br>Job Scope: SEE MORE<br><br><a href="default.asp" target="_blank">Apply now</a></p>
            </div>

        <div class="inline-box">
            <p><br>NEW JOB<br>BEWARE OF ADDICTION<br>Job Scope: SEE MORE<br><br><a href="default.asp" target="_blank">Apply now</a></p>
        </div>

        <div class="inline-box">
                <p><br>NEW JOB<br>BEWARE OF ADDICTION<br>Job Scope: SEE MORE<br><br><a href="default.asp" target="_blank">Apply now</a></p>
        </div>
        <br><br>
        <div class="inline-box">

            <p><br>NEW JOB<br>BEWARE OF ADDICTION<br>Job Scope: SEE MORE<br><br><a href="default.asp" target="_blank">Apply now</a></p>
        </div>

        <div class="inline-box">
            <p><br>NEW JOB<br>BEWARE OF ADDICTION<br>Job Scope: SEE MORE<br><br><a href="default.asp" target="_blank">Apply now</a></p>
        </div>

        <div class="inline-box">
            <p><br>NEW JOB<br>BEWARE OF ADDICTION<br>Job Scope: SEE MORE<br><br><a href="default.asp" target="_blank">Apply now</a></p>
        </div>

        <?php } else if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == "2") { ?>
        <br>
        <h2><u><center>JCU Employer's Portal</center></u></h2>
        <br><br>
        <p>New information will appear here</p>
	    <?php } else { ?>
        <br>
        <center><h3><u>JCU Singapore Job Portal</u></h3></center>
        <br><br>
        <p>Searching for a job or looking for potential employees?</p>
        <?php } ?>
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
