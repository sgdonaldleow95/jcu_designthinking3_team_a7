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
            <center><h2><u>View Profile</u></h2>
            <br><br>
            <?php
            include('includes/dbFunctions.php');
            $companyid = $_SESSION['id'];
            $query = "SELECT * FROM company_profile WHERE registered_users_id = '$companyid'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $name = $row['company_name'];
                $address = $row['address'];
                $industry = $row['industry'];
                $company_website = $row['company_website'];
                $contact = $row['email'];
                $description = $row['description'];

                echo "<b>Company Name: ".$name."</b><br>";
                echo "<b>Address: ".$address."</b><br>";
                echo "<b>Industry: ".$industry."</b><br>";
                echo "<b>Company Website: ".$company_website."</b><br>";
                echo "<b>Contact: ".$contact."</b><br>";
                echo "<b>Description: ".$description."'s resume</a></b><br><br>";
            } else {
                ?>
                Please <b><u><a href="editCompanyProfile.php">update</a></u></b> your profile before viewing this page.<br>
                Thank you.
                <?php
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