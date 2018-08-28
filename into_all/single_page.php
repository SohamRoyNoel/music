<?php include "includes/head.php"?>
    <div id="page-wrapper">
    <div class="inner-content single">
        <!--/music-right-->
        <div class="tittle-head">
            <?php
            if (isset($_GET['id'])){
                $para = $_GET['id'];
                $sel = "select * from music where id=$para";
                $n = mysqli_query($connection, $sel);
                while ($x = mysqli_fetch_assoc($n)){
                    $lang_code = $x['language'];
                }
                if (isset($_SESSION['holder'])) {
                    $holder = $_SESSION['holder'];
                }else{
                    $holder = $lang_code;
                }
                $get_id = $_GET['id'];
                $test = "select * from music";
                $pass = mysqli_query($connection, $test);
                while ($xp = mysqli_fetch_assoc($pass)){
                    $max_id = $xp['id'];
                }
                if ($get_id <= $max_id){
                    $sql3 = "select * from music where id=$get_id";
                    $getter = mysqli_query($connection, $sql3);
                    while ($g = mysqli_fetch_assoc($getter)) {
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
                        $tube = $g['youtube_id'];
                        $_SESSION['sng'] = $songs;
                    }
                } else{
                    header("Location: ../error/error.php");
                }
            } else {
                header("Location: ../error/error.php");
            }
            ?>
            <h3 class="tittle"><?php echo $title .' - ' . $singer ?> <span class="new">Details</span></h3>
            <div class="clearfix"> </div>
        </div>
        <div class="single_left">
            <!--/video-main-->
            <div class="">
                <div class="">
                    <div id="" class="" role="application" aria-label="media player">
                        <div class="jp-type-playlist">
                            <div>
                                <iframe width="438" height="400" src="https://www.youtube.com/embed/<?php echo $tube; ?>" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                            </div>
                            <div class="jp-gui">
                                <div class="jp-video-play" style="display: block;">
                                </div>
                                <div class="jp-interface">
                                </div>
                            </div>
                            <div class="jp-playlist">

                                <center><h1>Top Artists of all time</h1></center>
                                <ul style="display: block;">
                                    <?php
                                    $sql1 = "select * from artist where language=$language limit 7";
                                    $cross = mysqli_query($connection, $sql1);
                                    $xy = 1;
                                    while ($r = mysqli_fetch_assoc($cross)) {
                                    $singer = $r['name'];
                                    ?>
                                    <div><li class=""><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;"></a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0"><?php echo $xy . ' ' . $singer ?> <span class="jp-artist">by Symphony</span></a></div></li>
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
            <!-- script for play-list : make query to pull artist names-->
            <link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
        </div>
        <div class="response">
            <h4>Lyrics</h4>
            <div class="media response-info">
                <?php echo $lyrics ?>
                <br>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="response">
            <h4>Description</h4>
            <div class="media response-info">
                <?php echo $description ?>

                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="response">
            <?php
            $l = $language;
            if ($l == 1 )
                $languager = "English";
            if ($l == 2)
                $languager = "Hindi";
            if ($l == 3)
                $languager = "Bengali";
            ?>
            <h4>Language -   <?php echo $languager; ?></h4>
            <div class="media response-info">

                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="response">
            <h4><i class="fa fa-download"></i> Download
            <br><br>
            <audio controls>
                <source src="../songs/<?php echo $songs; ?>" type="audio/mp3">
                Your browser does not support the audio element.
            </audio></h4>
            <div class="media response-info">

                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- /agileits -->
        <div class="clearfix"> </div>
        <!--//music-right-->
    </div>
    <!-- /w3l-agileits-->
    <!--body wrapper start-->
    <div class="review-slider">
    <div class="tittle-head">
        <h3 class="tittle">Featured Songs <span class="new"> New</span></h3>
        <div class="clearfix"> </div>
    </div>
    <ul id="flexiselDemo1">
        <?php
        if ($holder === 1 || $holder === 2 || $holder === 8 || $holder === 9 || $holder === 14 || $holder === 16 || $holder === 17){
            $lag = 1;
        } elseif ($holder === 6 || $holder === 7 || $holder === 12 || $holder === 13){
            $lag = 3;
        } elseif ($holder === 3 || $holder === 4 || $holder === 10 || $holder === 11){
            $lag = 2;
        } elseif ($holder === 5 || $holder === 7){
            $lag = 0;
        }

        $sql3 = "select * from music where language=$lag limit 15";
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
<?php include "includes/single_page_footer.php"?>