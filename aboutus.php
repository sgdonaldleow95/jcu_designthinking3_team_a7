<?php session_start() ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>JCU Singapore Job Portal</title>
    <link href="css/external.css" rel="stylesheet"/>
    <link href="css/nav.css" rel="stylesheet"/>
    <link href="css/media.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="images/businessIcon.png" type="image/jpg">
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
            <center><h1>JCUS Connect</h1></center>
            <br><br>
            <center><h3><u>About Us</u></h3></center>
            <p>JCUS Connect is a website that aims to aid both graduating students and employers
                who are in need of a job and capable employees respectively.</p><br><br><br>

            <center><h4><u>Students</u></h4></center>
            <p>For graduating students who are looking for employment, JCUS Connect is a job portal
                website that gives graduates a platform to find employment after graduation. Unlike
                other job portals, JCUS Connect is an excellent platform for fresh graduates who have
                no prior experiences in the workforce to find a start in their careers.</p><br><br><br>

            <center><h4><u>Employers</u></h4></center>
            <p>For employers who are in need of fresh employees, the JCUS Connect job portal is a
                job portal website that gives employers a platform to advertise their respective jobs
                to graduating students. Unlike other job portals, our job portal gives smaller sized
                companies who struggle to fill technical roles the opportunity to employ capable
                graduating students.</p>
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