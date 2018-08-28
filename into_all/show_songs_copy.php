<?php include "includes/head.php"?>

    <!-- //header-ends -->
    <div id="page-wrapper">
        <div class="inner-content">
            <?php
            if (isset($_GET['name'])){
                $names = $_GET['name'];
                $flag = false;
                if ($names==""){
                    header("Location: ../error/error.php");
                }else{
                    $names = $_GET['name'];
                    $qrys = "select * from music where singer='$names'";
                    $sp = mysqli_query($connection, $qrys);
                    while ($rr = mysqli_fetch_assoc($sp)){
                        $tit = $rr['singer'];
                        if ($tit === $names){
                            $flag = true;
                            break;
                        } else {
                            header("Location: ../error/error.php");
                        }
                    }
                }
            } elseif (isset($_GET['names'])) {
                $names = $_GET['names'];
                $flag = 0;
                if ($names==""){
                    header("Location: ../error/error.php");
                }else{
                    $names = $_GET['names'];
                    $qrys = "select * from music where album_tag='$names'";
                    $sp = mysqli_query($connection, $qrys);
                    while ($rr = mysqli_fetch_assoc($sp)){
                        $tit = $rr['album_tag'];
                        if ($tit === $names){
                            $flag = 1;
                            break;
                        } else {
                            header("Location: ../error/error.php");
                        }
                    }
                }
            } else{
                header("Location: ../error/error.php");
            }
            ?>

            <div class="music-left">
                <!--banner-section-->
                <div class="banner-section">
                    <div class="banner">
                        <div class="callbacks_container">
                            <ul class="rslides callbacks callbacks1" id="slider4">
                                <li>
                                    <div class="banner-img">
                                        <img src="images/11.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="banner-info">
                                        <a class="trend" href="single.html">TRENDING</a>
                                        <h3>Let Your Home</h3>
                                        <p>Album by <span>Rock star</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--banner-->
                        <script src="js/responsiveslides.min.js"></script>
                        <script>
                            // You can also use "$(window).load(function() {"
                            $(function () {
                                // Slideshow 4
                                $("#slider4").responsiveSlides({
                                    auto: true,
                                    pager:true,
                                    nav:true,
                                    speed: 500,
                                    namespace: "callbacks",
                                    before: function () {
                                        $('.events').append("<li>before event fired.</li>");
                                    },
                                    after: function () {
                                        $('.events').append("<li>after event fired.</li>");
                                    }
                                });

                            });
                        </script>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!--//End-banner-->
                <!--albums-->
                <!-- pop-up-box -->
                <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
                <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                    });
                </script>
                <!--//pop-up-box -->
                <div class="albums">
                    <div class="tittle-head">
                        <h3 class="tittle"> Songs Of <span class="new"><?php echo $names; ?></span></h3>
                        <div class="clearfix"> </div>
                    </div>
                    <?php
                    if ($flag == true) {
                        $sql = "select * from music where singer = '$names'";
                        $ken = mysqli_query($connection, $sql);
                        $i = 1;
                        $x = 4;
                        $px = 0;
                        while ($row = mysqli_fetch_assoc($ken)) {
                            $id = $row['id'];
                            $title = $row['title'];
                            $singer = $row['singer'];
                            $description = $row['description'];
                            $length = $row['length'];
                            $relese_date = $row['relese_date'];
                            $likes = $row['likes'];
                            $lyrics = $row['lyrics'];
                            $genere = $row['genere'];
                            $songs = $row['songs'];
                            $thumbnail = $row['thumbnail'];
                            $language = $row['language'];

                            $_SESSION['id'] = $id;
                            $_SESSION['title'] = $title;
                            $_SESSION['singer'] = $singer;
                            $_SESSION['description'] = $description;
                            $_SESSION['length'] = $length;
                            $_SESSION['relese_date'] = $relese_date;
                            $_SESSION['likes'] = $likes;
                            $_SESSION['lyrics'] = $lyrics;
                            $_SESSION['genere'] = $genere;
                            $_SESSION['songs'] = $songs;
                            $_SESSION['thumbnail'] = $thumbnail;
                            $_SESSION['language'] = $language;

                            if ($i === $x) {
                                echo "<div class='col-md-3 content-grid last-grid'>";
                                echo "<a class='play-icon' href='single_page.php?id=$id'><img height='210' width='300' src='../thumbnail/$thumbnail' title='allbum-name'></a>";
                                echo "<a class='button play-icon' href='single_page.php?id=$id'>Listen now</a>";
                                echo "</div>";
                                $px = $x;
                                $x = $x * 2;
                            }
                            if ($i != $px) {
                                echo "<div class='col-md-3 content-grid'>";
                                echo "<a class='play-icon' href='single_page.php?id=$id'><img height='210' width='300' src='../thumbnail/$thumbnail' title='allbum-name'></a>";

                                echo "<a class='button play-icon' href='single_page.php?id=$id'>Listen now</a>";
                                echo "</div>";
                            }
                            $i = $i + 1;
                        }
                    }
                        if ($flag == 1) {
                            $sql = "select * from music where album_tag = '$names'";
                            $ken = mysqli_query($connection, $sql);
                            $i = 1;
                            $x = 4;
                            $px = 0;
                            while ($row = mysqli_fetch_assoc($ken)) {
                                $id = $row['id'];
                                $title = $row['title'];
                                $singer = $row['singer'];
                                $description = $row['description'];
                                $length = $row['length'];
                                $relese_date = $row['relese_date'];
                                $likes = $row['likes'];
                                $lyrics = $row['lyrics'];
                                $genere = $row['genere'];
                                $songs = $row['songs'];
                                $thumbnail = $row['thumbnail'];
                                $language = $row['language'];

                                $_SESSION['id'] = $id;
                                $_SESSION['title'] = $title;
                                $_SESSION['singer'] = $singer;
                                $_SESSION['description'] = $description;
                                $_SESSION['length'] = $length;
                                $_SESSION['relese_date'] = $relese_date;
                                $_SESSION['likes'] = $likes;
                                $_SESSION['lyrics'] = $lyrics;
                                $_SESSION['genere'] = $genere;
                                $_SESSION['songs'] = $songs;
                                $_SESSION['thumbnail'] = $thumbnail;
                                $_SESSION['language'] = $language;

                                if ($i === $x) {
                                    echo "<div class='col-md-3 content-grid last-grid'>";
                                    echo "<a class='play-icon' href='single_page.php?id=$id'><img height='210' width='300' src='../thumbnail/$thumbnail' title='allbum-name'></a>";
                                    echo "<a class='button play-icon' href='single_page.php?id=$id'>Listen now</a>";
                                    echo "</div>";
                                    $px = $x;
                                    $x = $x * 2;
                                }
                                if ($i != $px) {
                                    echo "<div class='col-md-3 content-grid'>";
                                    echo "<a class='play-icon' href='single_page.php?id=$id'><img height='210' width='300' src='../thumbnail/$thumbnail' title='allbum-name'></a>";

                                    echo "<a class='button play-icon' href='single_page.php?id=$id'>Listen now</a>";
                                    echo "</div>";
                                }
                                $i = $i + 1;
                            }
                        }

                    ?>
                    <div class="clearfix"> </div>
                </div>
                <!--//End-albums-->
                <!--//discover-view-->


            </div>
            <!--//music-left-->
            <!--/music-right-->

            <div class="music-right">
                <center><a href="browse1.php?para=all"><img height="350" src="images/mus.png" title="Find All Songs"></a></center>
                <!--/video-main-->
                <div class="video-main">
                    <div class="video-record-list">
                        <div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
                            <div class="jp-type-playlist">
                                <div class="jp-gui">
                                    <div class="jp-video-play" style="display: block;">
                                        <!--<button class="jp-video-play-icon" role="button" tabindex="0">play</button>-->
                                    </div>
                                    <div class="jp-interface">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar" style="width: 100%;">
                                                <div class="jp-play-bar" style="width: 0%;"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="jp-playlist">
                                    <center><h1>Top Artists of all time</h1></center>
                                    <ul style="display: block;">
                                        <?php
                                        $lang = $_SESSION['to_show_songs_copy'];
                                        $sql1 = "select * from artist where language=$lang limit 7";
                                        $cross = mysqli_query($connection, $sql1);
                                        $xy = 1;
                                        while ($r = mysqli_fetch_assoc($cross)) {
                                        $singer = $r['name'];
                                        ?>
                                        <div><li class=""><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;"></a><a href="artist.php" class="jp-playlist-item jp-playlist-current" tabindex="0"><?php echo $xy . ' ' . $singer ?> <span class="jp-artist">by Symphony</span></a></div></li>
                                            <?php
                                            $xy++;
                                            }
                                            ?>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- script for play-list -->
                <link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">

                <!-- //script for play-list -->

                <!--//video-main-->
                <!--/app_store-->
                <div class="form-group">
                    <br>
                    <img src="images/sss.png" style="width: 435px; height: 200px; display: inline;">
                    <div class="clearfix"> </div>
                </div>
                <br>
                <!--//app_store-->
                <!--/start-paricing-tables-->
                <div class="price-section">
                    <div class="pricing-inner">
                        <h3 class="hd-tittle">Upgrade your Plan</h3>
                        <div class="pricing">
                            <div class="price-top">
                                <h3><span>$0</span></h3>
                                <h4>per year</h4>
                            </div>
                            <div class="price-bottom">
                                <ul>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Download unlimited songs</a><div class="clearfix"></div></li>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Request Us A Song</a><div class="clearfix"></div></li>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Upload Your Song Here</a><div class="clearfix"></div></li>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Watch Song Videos</a><div class="clearfix"></div></li>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Lifetime Free Access</a><div class="clearfix"></div></li>
                                </ul>
                                <a href="single.html" class="price">Upgrade</a>
                            </div>
                        </div>
                        <div class="pricing two">
                            <div class="price-top">
                                <h3><span>$10</span></h3>
                                <h4>per year</h4>
                            </div>
                            <div class="price-bottom">
                                <ul>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Download unlimited songs</a><div class="clearfix"></div></li>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Request Us A Song</a><div class="clearfix"></div></li>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Upload Your Song Here</a><div class="clearfix"></div></li>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Watch & Download Song Videos</a><div class="clearfix"></div></li>
                                    <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Cool Features</a><div class="clearfix"></div></li>
                                </ul>
                                <a href="single.html" class="price">Upgrade</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--//end-pricing-tables-->
                </div>
            </div>
            <!--//music-right-->
            <div class="clearfix"></div>
            <!-- /w3l-agile-its -->
        </div>
    </div>
    <!--body wrapper start-->

    <div class="review-slider">
    <div class="tittle-head">
        <h3 class="tittle">Featured Songs <span class="new"> New</span></h3>
        <div class="clearfix"> </div>
    </div>
    <ul id="flexiselDemo1">
        <?php
        $sql3 = "select * from music where language=$lang limit 15";
        $getter = mysqli_query($connection, $sql3);
        while ($g = mysqli_fetch_assoc($getter)){
            $idp = $g['id'];
            $title = $g['title'];
            $singer = $g['singer'];
            $description = $g['description'];
            $length = $g['length'];
            $relese_date = $g['relese_date'];
            $likes = $g['likes'];
            $lyrics = $g['lyrics'];
            $genere = $g['genere'];
            $songs = $g['songs'];
            $thumbnail = $g['thumbnail'];
            $language = $g['language'];

            $_SESSION['id'] = $idp;
            $_SESSION['title'] = $title;
            $_SESSION['singer'] = $singer;
            $_SESSION['description'] = $description;
            $_SESSION['length'] = $length;
            $_SESSION['relese_date'] = $relese_date;
            $_SESSION['likes'] = $likes;
            $_SESSION['lyrics'] = $lyrics;
            $_SESSION['genere'] = $genere;
            $_SESSION['songs'] = $songs;
            $_SESSION['thumbnail'] = $thumbnail;
            $_SESSION['language'] = $language;

//            echo "<li>";
//            echo  "<a href='single_page.php?id={$idp}'><img height='210' width='300' src='../thumbnail/$thumbnail' alt=''/></a>";
            ?>
            <li>
                <a href="single_page.php?id=<?php echo $idp; ?>"><img height='210' width='300' src="../thumbnail/<?php echo $thumbnail; ?>" alt=""/></a>
                <div class="slide-title"><h4><?php echo $title; ?> </div>
                <div class="date-city">
                    <h5><?php echo $relese_date; ?></h5>
                    <div class="buy-tickets">
                        <a href="single_page.php?id=<?php echo $idp; ?>">READ MORE</a>
                    </div>
                </div>
            </li>
            <?php
            echo "</li>";
        }
        ?>
    </ul>
<?php include "includes/show_songs_footer.php"?>