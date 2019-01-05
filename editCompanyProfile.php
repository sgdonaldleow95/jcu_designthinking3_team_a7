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
            <center>
            <h3><u>Company Profile</u></h3>
            <br><br>
            <form name="comapnyProfile" method="post" action="doEditCompanyProfile.php">
                <table>
                    <tr>
                        <td>Company's Name:</td><td><input type='text' name='companyname' placeholder='Name of Company' required></td>
                    </tr>
                    <tr>
                        <td>Location:</td><td><input type="text" name="location" placeholder="Company Address" required></td>
                    </tr>
                    <tr>
                        <td>Industry:</td><td><input type="text" name="industrytype" placeholder="Industry Type" required> </td>
                    </tr>
                    <tr>
                        <td>Company's Description:</td><td><textarea rows="4" cols="50" name="description" placeholder="About the company" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Company's Website:</td><td><input type="text" name="website" placeholder="Company website" required> </td>
                    </tr>
                    <tr>
                        <td>Company's Contact</td><td><input type="email" name="email" placeholder="Company's email address" required></td>
                    </tr>
                </table>
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