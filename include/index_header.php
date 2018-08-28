<?php include "./db.php"; ?>
<?php include "./function.php"; ?>
<?php session_start(); ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Symphony.com</title>
    <link rel="shotcut icon" type="image/png" href="./favicon/favicon.png">
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Symphony Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head>

<body>
<!-- banner -->
<div class="banner">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="index.php">Sym<span>phony</span></a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--iris">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
                        <?php
                        if (isset($_SESSION['role'])){
                            $p = $_SESSION['role'];
                            if ($p === "admin")
                                echo "<li class='menu__item'><a href='./into_all/browse1.php?para=all' class='menu__link'>ADMIN</a></li>";
                        }
                        ?>
                        <li class="menu__item"><a href="./into_all/browse1.php?para=all" class="menu__link">See All</a></li>
                        <li class="menu__item"><a href="events.php" class="menu__link">Events</a></li>
                        <?php
                        if (isset($_SESSION['u_name'])){
                            $s = $_SESSION['u_name'];
                            if ($s === "sparkleofhersmile&&22&&mitsuha") {
                                echo "<li class='menu__item'><a href='login.php' class='menu__link''>Log In</a></li>";
                                echo "<li class='menu__item'><a href='login_reg.php' class='menu__link'>Register</a></li>";
                            }
                        }
                        if (!isset($_SESSION['u_name'])){
                                echo "<li class='menu__item'><a href='login.php' class='menu__link''>Log In</a></li>";
                                echo "<li class='menu__item'><a href='login_reg.php' class='menu__link'>Register</a></li>";

                        }
                        ?>
                        <li class="menu__item"><a href="contact.php" class="menu__link">About us</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
        <div class="agile_banner_info">
            <h3>music</h3>
            <div class="agile_banner_info_pos">
                <h2>One Love</h2>
            </div>
        </div>
    </div>
</div>

<!-- //banner -->