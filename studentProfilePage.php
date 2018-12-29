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
        <center><h2><u>View Profile</u></h2>
            <br><br>
        <?php
        include('includes/dbFunctions.php');
        $studentid = $_SESSION['id'];
        $query = "SELECT * FROM students_profile WHERE registered_users_id = '$studentid'";
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
            echo "<b>Age: ".$name."</b><br>";
            echo "<b>Course: ".$name."</b><br>";
            echo "<b>Speciality: ".$name."</b><br>";
            echo "<b>Contact: ".$name."</b><br>";
            echo "<b>Resume: <a href='resume/'".$name."'>".$name."</a></b><br><br>";

        } else {
            ?>
            Please <b><u>update</u></b> your profile before viewing this page.<br>
            Thank you.
            <?php
        }
        ?>

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
