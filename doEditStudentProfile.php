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
    <div id="content2">
        <center>
            <?php
            include('includes/dbFunctions.php');
            $studentid = $_SESSION['id'];
            $query = "SELECT * FROM student_table WHERE registered_users_id = '$studentid'";

            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            if (mysqli_num_rows($result) > 0) {

                function getRandomString($length = 8) {
                    $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ+-*#&@!?1234567890";
                    $validCharNumber = strlen($validCharacters);

                    $result = "";

                    for ($i = 0; $i < $length; $i++) {
                        $index = mt_rand(0, $validCharNumber - 1);
                        $result .= $validCharacters[$index];
                    }

                    return $result;
                }

                $random = getRandomString();
                $random2 = SHA1($random);

                $target_path = "resume/";
                $success1 = false;

                if ($_FILES['resume_file_pdf']['size'] > 0) {
                    $fileName1 = $random2 . '.' . substr(strrchr(($_FILES['resume_file_pdf']['name']), '.'), 1);
                    $target_path1 = $target_path . $fileName1;
                    $success1 = true;
                } else {
                    $success1 = false;
                }

                if ($success1) {
                    if (move_uploaded_file($_FILES['resume_file_pdf']['tmp_name'], $target_path1)) {
                        $msg = "You have updated your profile and resume";

                        $id = $_SESSION['id'];
                        $fname = $_POST['fullname'];
                        $age = $_POST['age'];
                        $course = $_POST['course_of_study'];
                        $comment = $_POST['comment'];
                        $contact = $_POST['contact'];

                        $updateQuery = "UPDATE student_table SET student_name ='$fname', age ='$age', course ='$course', speciality = '$comment' , contact ='$contact', resume ='$fileName1' WHERE registered_users_id = '$id' ";

                        $result = mysqli_query($link, $updateQuery) or die(mysqli_error($link));

                    }
                }

            } else {

                function getRandomString($length = 8)
                {
                    $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ+-*#&@!?1234567890";
                    $validCharNumber = strlen($validCharacters);

                    $result = "";

                    for ($i = 0; $i < $length; $i++) {
                        $index = mt_rand(0, $validCharNumber - 1);
                        $result .= $validCharacters[$index];
                    }

                    return $result;
                }

                $random = getRandomString();
                $random2 = SHA1($random);

                include('includes/dbFunctions.php');
                $target_path = "resume/";
                $success1 = false;

                if ($_FILES['resume_file_pdf']['size'] > 0) {
                    $fileName1 = $random2 . '.' . substr(strrchr(($_FILES['resume_file_pdf']['name']), '.'), 1);
                    $target_path1 = $target_path . $fileName1;
                    $success1 = true;
                } else {
                    $success1 = false;
                }

                if ($success1) {
                    if (move_uploaded_file($_FILES['resume_file_pdf']['tmp_name'], $target_path1)) {
                        $msg = "Your resume have been uploaded and your profile has been created";

                        $id = $_SESSION['id'];
                        $fname = $_POST['fullname'];
                        $age = $_POST['age'];
                        $course = $_POST['course_of_study'];
                        $comment = $_POST['comment'];
                        $contact = $_POST['contact'];

                        $insertQuery = "INSERT INTO student_table (student_name, age, course, speciality, contact, registered_users_id, resume) VALUES ('$fname', '$age', '$course', '$comment', '$contact', '$id', '$fileName1')";

                        $result = mysqli_query($link, $insertQuery) or die(mysqli_error($link));

                    }
                }
            }

            ?>
            <br>
            <h3>Update Student's Profile Status</h3>
            <b><?php echo $msg;
                header('Refresh: 3; url=index.php');
                ?></b><br><br><br><br><br>
        </center>
</section>

<footer id="footer">
    <?php include('includes/footer.php') ?>
</footer>

</body>
</html>