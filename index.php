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
        border: 1px solid black;
        background-color:aliceblue;
        margin-left: 15px;
        color: black;
    }
    div a:link, a:visited {
        padding: 6px 10px;
        background-color: black;
        color: white;
        font-size: 15px;
        text-align: center;
        text-decoration: none;
        border-radius: 9px;
        display: inline-block;
    }


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
                <p><center><h3>News</h3><br>JCU Portal will be down for maintenance</center></p>
            </div>
            <div class="inline-box">
                <p><center><h3>Messages</h3><br>You have <b><u>0</u></b> messages</center></p>
            </div>
            <div class="inline-box">
                <p><center><h3>Guides</h3><br><u>How to apply for a job</u></center></p>
            </div>
            <br><br>
        <?php } else if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == "2") { ?>
            <br>
            <h2><u><center>JCU Employer's Portal</center></u></h2>
            <br><br>
            <div class="inline-box">
                <p><center><h3>News</h3><br>JCU Portal will be down for maintenance</center></p>
            </div>
            <div class="inline-box">
                <p><center><h3>Messages</h3><br>You have <b><u>0</u></b> messages</center></p>
            </div>
            <div class="inline-box">
                <p><center><h3>Guides</h3><br><u>How to create a listing</u></center></p>
            </div>
            <br><br>
        <?php } else { ?>
            <br>
            <center><h3><u>JCU Singapore Job Portal</u></h3></center>
            <br><br>
            <p>Searching for a job or looking for potential employees?<br>
            Register now to view all jobs available. Internship is also possible!</p>
        <?php } ?>
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