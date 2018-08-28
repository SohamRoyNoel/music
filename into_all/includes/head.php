<?php ob_start(); ?>
<?php include "../db.php"?>
<?php include "../function.php"?>
<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Symphony.com</title>
    <link rel="shotcut icon" type="image/png" href="../favicon/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style2.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.css" type='text/css' />
    <!-- //lined-icons -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $("#search").autocomplete({
                source: "search.php",
                minLength: 2,
                select: function (event, ui) {
                    event.preventDefault();
                    $('#search').val(ui.item.id);
                }
            });
        });
    </script>
    <!-- Meters graphs -->
    <script src="js/jquery-2.1.4.js"></script>


</head>
<!-- /w3layouts-agile -->
<body class="sticky-header left-side-collapsed"  onload="initMap()">
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <h1><a href="../index.php">Symphon<span>y</span></a></h1>
        </div>
        <div class="logo-icon text-center">
            <a href="../index.php">S </a>
        </div>

        <!--logo and iconic logo end-->
        <div class="left-side-inner">

            <!--sidebar nav start-->
            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="../index.php"><i class="lnr lnr-home"></i><span>Home</span></a></li>
                <li><a href="../profile.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                <?php
                    if (isset($_SESSION['role'])) {
                        $xp = $_SESSION['role'];
                        if ($xp === "admin") {
                            echo "<li><a href='../upload_song.php'><img height='25' width='25' src='./images/upload.png'><span>Add Songs</span></a></li>";
                            echo "<li><a href='./show_all_song.php'><img height='25' width='30' src='./images/all_music.png'></i><span>See All Songs</span></a></li>";
                            echo "<li><a href='../add_artist.php'><img height='20' width='30' src='./images/artist1.png'><span>Add Artist</span></a></li>";
                            echo "<li><a href='./show_all_artist.php'><img height='28' width='35' src='./images/artist-icon.png'><span>See All Artist</span></a></li>";
                            echo "<li><a href='../upload_album.php'><img height='20' width='30' src='./images/album.png'><span>Add Albums</span></a></li>";
                            echo "<li><a href='./show_all_album.php'><img height='20' width='28' src='./images/abs.png'><span>See All Album</span></a></li>";
                            echo "<li><a href='../upload_events.php'><img height='20' width='30' src='../images/eventadd.png'><span>Add Event</span></a></li>";
                            echo "<li><a href='./show_all_events.php'><img height='25' width='30' src='./images/calender.png'><span>See All Event</span></a></li>";
                        }
                    }
                ?>
                <?php  ?>
                <li><a href="./artist.php"><i class="lnr lnr-users"></i> <span>Artists</span></a></li>
                <li><a href="./album.php"><i class="lnr lnr-music-note"></i> <span>Albums</span></a></li>
                <li><a href="../events.php"><i class="fa fa-calendar"></i> <span>Events</span></a></li>
                <li><a href="../contact.php"><i class="lnr lnr-pencil"></i> <span>About Us</span></a></li>
                <li><a href="../about.php"><i class="fa fa-thumb-tack"></i><span>Contact</span></a></li>
                <?php
                    if (isset($_SESSION['u_name'])){
                        $xx = $_SESSION['u_name'];
                        if ($xx != "sparkleofhersmile&&22&&mitsuha") {
                            echo "<li><a href='../logout.php'><i class='fa fa-sign-out'></i><span>Log Out</span></a></li>";
                        } else {
                            echo "<li><a href='../login.php'><i class='fa fa-sign-in'></i><span>Log In</span></a></li>";
                        }
                    } else{
                        echo "<li><a href='../login.php'><i class='fa fa-sign-in'></i><span>Log In</span></a></li>";
                    }

                ?>
            </ul>
            <!--sidebar nav end-->
            <!--sidebar nav end-->
        </div>
    </div>
    <!-- /w3layouts-agile -->
    <!-- app-->

    <!-- //app-->
    <!-- /w3l-agile -->
    <!-- signup -->

    <!-- //signup -->
    <!-- /w3l-agile -->
    <!-- left side end-->
    <!-- main content start-->
    <div class="main-content">
        <!-- header-starts -->
        <div class="header-section">
            <!--toggle button start-->
            <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->
            <!--notification menu start -->
            <div class="menu-right">
                <div class="profile_details">
                    <div class="col-md-4 serch-part">
                        <div id="sb-search" class="sb-search">
                            <form action="#" method="post">
                                <input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <!-- search-scripts -->
                    <script src="js/classie.js"></script>
                    <script src="js/uisearch.js"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <!-- //search-scripts -->
                    <!---->
                    <div class="col-md-4 player">
                        <link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
                        <script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>

                    </div>
                    <div class="col-md-4 login-pop">
                        <?php
                                if (isset($_SESSION['role'])){
                                    $rl = $_SESSION['role'];
                                    if ($rl === 'admin'){
                                        $rl = "ADMIN";
                                    }
                                    if ($rl === 'subs'){
                                        $rl = "User";
                                    }
                                }
                                if (!isset($_SESSION['role'])){
                                    $rl = "Guest";
                                }
                        ?>
                        <form action="" method="post">
                            <input type="submit" name="submit" value="<?php echo $rl; ?>" class="btn btn-success" style="height: 50px; width: 120px; visibility: visible; background-color: black">
                            <div class="clearfix" style="height: 0px"></div>
                        </form>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <!-------->
            </div>
            <div class="clearfix"></div>
        </div>
        <!--notification menu end -->
        <!-- //header-ends -->
        <!-- /w3l-agileits -->