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
        <center>
            <h3><u>Company Profile</u></h3>
            <br><br>
            <form name="comapnyProfile" method="post" action="doUpdateProfileCompany.php" ENCTYPE="multipart/form-data">
                <table>
                    <tr>
                        <td>Company ID:</td><td><input type='text' name='companyid' placeholder="Company ID Number" required></td>
                    </tr>
                    <tr>
                        <td>Company Name:</td><td><input type='text' name='companyname' placeholder='Name of Company' required></td>
                    </tr>
                    <tr>
                        <td>Location:</td><td><input type="text" name="location" placeholder="Company Address" required></td>
                    </tr>
                    <tr>
                        <td>Industry:</td><td><input type="text" name="industrytype" placeholder="Industry Type" required> </td>
                    </tr>
                    <tr>
                        <td>Company Description:</td><td><input type="text" name="description" placeholder="About the company" required> </td>
                    </tr>
                    <tr>
                        <td>Company Website:</td><td><input type="email" name="email" placeholder="Company email address" required> </td>
                    </tr>
                    <tr>
                        <td>Short description:</td><td><textarea rows="4" cols="50"></textarea></td>
                    </tr>
                    <tr>
                        <td></td><td><input class="button" input type="file" id="resume" name="document"></td>
                    </tr>
                </table>
                <input type="hidden" id="studentid" name="studentid" value= "<?php echo $_SESSION['id'] ?>" >
                <button class="button" input name="submit" type="submit">Submit</button>

            </form>
        </center>
        <br>
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
