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
            $studentid = $_SESSION['id'];
            $query = "SELECT * FROM student_table WHERE registered_users_id = '$studentid'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $name = $row['student_name'];
                $age = $row['age'];
                $course = $row['course'];
                $speciality = $row['speciality'];
                $contact = $row['contact'];
                $resume = $row['resume'];

                echo "<b>Name: ".$name."</b><br>";
                echo "<b>Age: ".$age."</b><br>";
                echo "<b>Course: ".$course."</b><br>";
                echo "<b>Speciality: ".$speciality."</b><br>";
                echo "<b>Contact: ".$contact."</b><br>";
                echo "<b>Resume: <a href=resume/".$resume.">".$name."'s resume</a></b><br><br>";
            } else {
                ?>
                Please <b><u><a href="editStudentProfile.php">update</a></u></b> your profile before viewing this page.<br>
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