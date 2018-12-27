<?php if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == '1'){ ?>
    <h3><font color="#000">Control Panel</font></h3>
    <b><font color="#000">Welcome, <?php echo $_SESSION['name'] ?></font></b>
    <br>
    <br>
    <a href="#"><button class="button" input type="button">View Profile</button></a><br>
    <a href="#"><button class="button" input type="button">Edit Profile</button></a><br>
    <a href="#"><button class="button" input type="button">Messages</button></a><br>
    <a href="doLogout.php"><button class="button" input type="button">Log Out</button></a>
    <br>
    <br>
    <br>

<?php } elseif(isset($_SESSION['usertype']) && $_SESSION['usertype'] == '2'){ ?>
    <h3><font color="#000">Control Panel</font></h3>
    <b><font color="#000">Welcome, <?php echo $_SESSION['name'] ?></font></b>
    <br>
    <br>
    <a href="#"><button class="button" input type="button">View Profile</button></a><br>
    <a href="#"><button class="button" input type="button">Edit Profile</button></a><br>
    <a href="#"><button class="button" input type="button">View Job's Posting</button></a><br>
    <a href="#"><button class="button" input type="button">Add New Jobs</button></a><br>
    <a href="doLogout.php"><button class="button" input type="button">Log Out</button></a>
    <br>
    <br>
    <br>
<?php } elseif(isset($_SESSION['usertype']) && $_SESSION['usertype'] == '8'){ ?>
    <h3><font color="#000">Control Panel</font></h3>
    <b><font color="#000">Administrator</font></b>
    <br>
    <br>
    <a href="#"><button class="button" input type="button">View All Profiles</button></a><br>
    <a href="doLogout.php"><button class="button" input type="button">Log Out</button></a>
    <br>
    <br>
    <br>
<?php } else { ?>
    <h3><font color="#000">Portal Credentials</font></h3>
    <br>
    <form name="login" method="post" action="doLogin.php">
        <fieldset>
            <table>
                <tr>
                    <td><font color="black">Username :</font></td>
                    <td><input name="username" type="text" size="20" placeholder="Username" required></td>
                </tr>
                <tr><td><font color="black">Password :</font></td>
                    <td> <input name="password" type="password" placeholder="password" required></td>
                </tr>
            </table>
            <button class="button" input name="submit" type="submit">Sign In</button>
            <a href="register.php"><button class="button" input type="button">Register</button></a><br>
            <a href="forgetPassword.php"><button class="button" input type="button">Forget Password?</button></a>
        </fieldset>
    </form>
<?php } ?>