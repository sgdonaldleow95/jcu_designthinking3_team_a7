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
        <center><h2><u>Applicant's Details</u></h2>
            <br><br>
            <?php
            include('includes/dbFunctions.php');
            $studentid = $_POST['viewdetails'];

            $query = "SELECT * FROM student_table WHERE registered_users_id = $studentid";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));

            if (mysqli_num_rows($result) == 1) {
                while($row = mysqli_fetch_array($result)) {
                    $studentname = $row['student_name'];
                    $age = $row['age'];
                    $course = $row['course'];
                    $speciality = $row['speciality'];
                    $contact = $row['contact'];
                    $resume = $row['resume'];
                }
                echo "<table>
                <tr>
                <td><b>Name : </b></td>
                <td>$studentname</td>
                </tr>
                <tr>
                <td><b>Age : </b></td>
                <td>$age</td>
                </tr>
                <tr>
                <td><b>Course : </b></td>
                <td>$course</td>
                </tr>
                <tr>
                <td><b>Speciality : </b></td>
                <td>$speciality</td>
                </tr>
                <tr>
                <td><b>Contact : </b></td>
                <td>$contact</td>
                </tr>
                <tr>
                <td><b>Resume : </b></td>
                <td><a href=resume/".$resume.">".$studentname."'s resume</a></td>
                </tr>
           
             
                </table>";
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