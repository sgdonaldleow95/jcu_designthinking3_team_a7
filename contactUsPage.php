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
        <?php if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "1") { ?>
            <br>
            <h2><u><center>JCU Student's Portal</center></u></h2>
            <br><br>
            <p>Recent Job posting will go here</p>
        <?php } else if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == "2") { ?>
            <br>
            <h2><u><center>JCU Employer's Portal</center></u></h2>
            <br><br>
            <p>New information will appear here</p>
        <?php } else { ?>
            <br>
            <center><h3><u>Contact Us</u></h3></center>
            <br><br>
            <h4>Sims Drive Campus:</h4>
            <br>
            <ul>
                <ol><b>Telephone:</b><br> +65 6709 3888</ol><br>
                <ol><b>Fax:</b><br> +65 6709 3889</ol><br>
                <ol><b>Email:</b><br>JCUSConnect@jcu.edu.sg </ol><br>
                <ol><b>Address:</b><br> 149 Sims Drive, Singapore 387380</ol><br>
            </ul>
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
