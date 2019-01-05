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
        <img id="img1" src="images/banner.jpg" width="100%">
    </header>
    <nav>
        <?php include('includes/nav.php') ?>
    </nav>
    <section>
        <div id="content">
            <br>
            <h2><u><center>Edit Student Profile</center></u></h2>
            <br>
            <center>
                <form name='editstudentprofile' method='post' action='doEditStudentProfile.php' enctype="multipart/form-data">
                    <br>
                    <table>
                        <tr>
                            <td>Full Name: </td>
                            <td><input name='fullname' type='text' size='20' placeholder='Full Name' required></td>
                        </tr>
                        <tr>
                            <td>Age: </td>
                            <td> <input name='age' type='number' placeholder='Age' required></td>
                        </tr>
                        <tr>
                            <td><font color='black'>Course Of Study: </font></td>
                            <td> <select name='course_of_study'>
                                    <option value='' disabled selected>Select your Course</option>
                                    <option value='BIT'>Bachelor of Information Technology</option>
                                    <option value='BPS'>Bachelor of Psychological Science</option>
                                    <option value='BE'>Bachelor of Education</option>
                                    <option value='BBES'>Bachelor of Business & Environmental Science</option>
                                    <option value='BA'>Bachelor of Arts</option>
                            </td>
                        </tr>
                        <tr>
                            <td>Contact: </td>
                            <td> <input name='contact' type='number' placeholder='91234567' required></td>
                        </tr>
                        <tr>
                            <td><font color='black'>Summary: </font></td>
                            <td><textarea name="comment" rows="7" cols="40" placeholder="Write a summary of yourself here..."></textarea></td>
                        </tr>
                        <tr>
                            <td>Resume: </td>
                            <td><input class="button" input type="file" id="upload" name="resume_file_pdf" accept="application/pdf"></td>
                        </tr>
                    </table>
                    <br>
                    <a href='index.php'> <button class="button" input type='button'>Back</button></a>
                    <button class="button" input name='submit' type='submit'>Update Profile</button><br><br>

                </form>
                <br>
            </center>
        </div>
    </section>
        <aside>
            <center>
                <?php include('includes/sidepanel.php') ?>
            </center>
        </aside>
        <footer id="footer">
            <?php include('includes/footer.php') ?>
        </footer>
    </body>
</html>
