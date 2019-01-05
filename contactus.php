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
        <center><h1><u>Contact Us</u></h1>
            <br><br>
            <h4>JCUS Connect Contact Information:</h4>
            <br>
            <ul>
                <ol><b>Telephone:</b><br> +65 6709 3888</ol><br>
                <ol><b>Fax:</b><br> +65 6709 3889</ol><br>
                <ol><b>Email:</b><br>JCUSConnect@jcu.edu.sg </ol><br>
                <ol><b>Address:</b><br> 149 Sims Drive, Singapore 387380</ol><br>
            </ul>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7656908870545!2d103.87408571585324!3d1.3161590620466905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1831b3334157%3A0xef2b9a5526ac77ad!2sJames+Cook+University!5e0!3m2!1sen!2ssg!4v1536773741467" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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