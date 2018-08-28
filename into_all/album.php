<?php include "includes/head.php"?>

    <!-- //header-ends -->
    <div id="page-wrapper">
    <div class="inner-content">
    <div class="music-browse">
    <!--albums-->
    <!-- pop-up-box -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--//pop-up-box -->

    <div class="browse">
        <div class="tittle-head two">
            <h3 class="tittle">Albums <span class="new">Find All</span></h3>
            <?php
            if (isset($_POST['xxx'])){
                echo  "boat";
            }
            ?>
            <div class="clearfix"> </div>
        </div>
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <form action="" method="post">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="" class=""><input type="submit" name="english" style="border: white; background: ghostwhite" class="btn btn-default" value="English"></li>
                    <li>&nbsp;&nbsp;&nbsp;</li>
                    <li role="" class=""><input type="submit" name="hindi" style="border: white; background: ghostwhite" class="btn btn-default" value="Hindi"></li>
                    <li>&nbsp;&nbsp;&nbsp;</li>
                    <li role="" class=""><input type="submit" name="bengali" style="border: white; background: ghostwhite" class="btn btn-default" value="Bengali"></li>
                </ul>
            </form>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="browse-inner">
                        <!-- /agileits -->
                        <?php
                        if (isset($_POST['english'])){
                            $_SESSION['language_to_artist_album'] = 1;
                            $hp = 1;
                        }
                        if (isset($_POST['hindi'])){
                            $_SESSION['language_to_artist_album'] = 2;
                            $hp = 2;
                        }
                        if (isset($_POST['bengali'])){
                            $_SESSION['language_to_artist_album'] = 3;
                            $hp = 3;
                        }
                        if (isset($_SESSION['language_to_artist_album'])) {
                            $lng = $_SESSION['language_to_artist_album'];
                            $sql = "select * from album where language_id = $lng";
                            $make = mysqli_query($connection, $sql);
                            while ($r = mysqli_fetch_assoc($make)) {
                                $id = $r['id'];
                                $title = $r['name'];
                                $image = $r['image'];
                                $language = $r['language_id'];
                                $artist = $r['artist_id'];

                                ?>
                                <div class="col-md-3 artist-grid">
                                    <a href="show_songs_copy.php?names=<?php echo $title; ?>"><img height='200' width='320' src="album_image/<?php echo $image; ?>" title="<?php echo $title; ?>"></a>
                                    <a class="art" href="show_songs_copy.php?name=<?php echo $title; ?>"><?php echo $title; ?></a>
                                </div>
                                <?php
                            }
//                                        header("Location: artist.php");
                        } else{
                            header("Location: ../error/error.php");
                        }
                        ?>
                        <div class="clearfix"> </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- /agileinfo -->
    </div>
    <!--//End-albums-->
    <!--//discover-view-->
    <div class="review-slider">
    <div class="tittle-head">
        <h3 class="tittle">Featured Songs <span class="new"> New</span></h3>
        <div class="clearfix"> </div>
    </div>
    <ul id="flexiselDemo1">
        <?php
        $sql3 = "select * from music where language=$lng limit 15";
        $getter = mysqli_query($connection, $sql3);
        while ($g = mysqli_fetch_assoc($getter)){
            $id = $g['id'];
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
            ?>
            <li>
                <a href="single_page.php?id=<?php echo $id ?>"><img height='210' width='300' src="../thumbnail/<?php echo $thumbnail; ?>" alt=""/></a>
                <div class="slide-title"><h4><?php echo $title; ?> </div>
                <div class="date-city">
                    <h5><?php echo $relese_date; ?></h5>
                    <div class="buy-tickets">
                        <a href="single_page.php?id=<?php echo $id ?>">READ MORE</a>
                    </div>
                </div>
            </li>
            <?php
        }
        // header("Location: artist.php");
        ?>
    </ul>
<?php include "includes/show_songs_footer.php"?>