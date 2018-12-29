<?php
session_start();
$_SESSION = array();
session_destroy();
?>
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

<section>
    <article>
        <?php header("Location: index.php"); ?>
    </article>
</section>
<footer id="footer">
    <?php include('includes/footer.php')?>
</footer>
</body>
</html>