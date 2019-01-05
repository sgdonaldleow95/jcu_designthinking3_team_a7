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
            <center><h1><u>FAQs</u></h1>
            <br><br>
            <h3><b>For Students:</b></h3><br>
            <h5><u>How do I upload my CV?</u></h5><br>
            <p>Place explanation here!</p><br><br>

            <h5><u>How long will it take for the company to reply to my resumes?</u></h5><br>
            <p>Place explanation here!</p><br><br>

            <h5><u>Other FAQs for students</u></h5><br>
            <p>Place explanation here!</p><br><br>


            <h3><b>For Employers:</b></h3><br>
            <h5><u>How do I advertise my company onto the website?</u></h5><br>
            <p>Place explanation here!</p><br><br>

            <h5><u>Other FAQs for students</u></h5><br>
            <p>Place explanation here!</p><br><br>
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