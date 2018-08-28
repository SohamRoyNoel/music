<?php include "include/index_header.php"?>
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="col-md-3 wthree_banner_bottom_grid">
            <div class="wthree_banner_bottom_grid1">
                <img src="images/1.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_bottom_grid_pos">
                    <h4>Featured <span>Songs</span></h4>
                </div>
            </div>
            <div class="w3layouts_banner_bottom_grid">
                <h3>Check Out here</h3>
            </div>
        </div>
        <?php
            $sql = "select * from music where feature_tag='featured' limit 3";
            $passer = mysqli_query($connection, $sql);
            while ($row=mysqli_fetch_assoc($passer)) {
                $id = $row['id'];
                $title = $row['title'];
                $singer = $row['singer'];
                $description = $row['description'];
                $length = $row['length'];
                $relese_date = $row['relese_date'];
                $lyrics = $row['lyrics'];
                $genere = $row['genere'];
                $songs = $row['songs'];
                $thumbnail = $row['thumbnail'];
                $language = $row['language'];
                $album_tag = $row['album_tag'];
                $youtube_id = $row['youtube_id'];
                $feature_tag = $row['feature_tag'];

                ?>
                <a href="into_all/single_page.php?id=<?php echo $id; ?>">
                <div class="col-md-3 agileits_w3layouts_banner_bottom_grid">
                    <div class="hovereffect">
                        <img style="width: 326px; height: 262px" src="thumbnail/<?php echo $thumbnail; ?>" alt=" " class="img-responsive"/>
                        <div class="overlay">
                            <h3 class="w3_instruments"><?php echo $title; ?></h3>
                        </div>
                    </div>
                    <div  class="agileinfo_banner_bottom_grid">
                        <div class="agileits_banner_bottom_grid1">
                            <h4 class="w3ls_color"><?php echo $singer; ?></h4>
                            <h4 class="w3ls_color"><?php echo $relese_date ?></h4>
                            <p><?php echo $description; ?></p>
                        </div>
                    </div>
                </div>
                </a>
                <?php
            }
                ?>
        <div class="clearfix"></div>
    </div>
    <!-- //banner-bottom -->
    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="w3_agile_about_grids">
                <div class="col-md-6 w3_agile_about_grid_left">
                    <img src="images/5.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 w3_agile_about_grid_right">
                    <h3>Welcome to symphony</h3>
                    <h4>Music World</h4>
                    <p>
                        Looks like they haven't given up...<br>
                        Looks like the world still wants to try and control us....<br>
                        Give it your worst. I will be strong<br>
                        Take it in stride and walk along.<br><br>Here, you and I will live on!</span></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- features -->
    <div class="features">
        <div class="container">
            <?php include "gallery.php" ?>
        </div>
    </div>
    <!-- //features -->
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="col-md-6 w3_agile_newsletter_left">
                <p>Subscribe Newsletter</p>
            </div>
            <div class="col-md-6 w3_agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Email..." required="">
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //newsletter -->
    <!-- team -->


    <!-- //team -->
    <!-- latest-albums -->
    <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head">All time best song <span>Collections</span></h3>
            <div class="wthree_latest_albums_grids">
                <div class="col-md-4 wthree_latest_albums_grid_left">
                    <figure class="effect-julia">
                        <img src="images/bob.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <div class="w3l_banner_figure">
                                <?php
                                        $sel = "select * from music where language=1";
                                        $n = mysqli_query($connection, $sel);
                                        while ($x = mysqli_fetch_assoc($n)){
                                        $idp = $x['id'];
                                        $tits = $x['title'];
                                ?>
                                            <p><a href="into_all/single_page.php?id=<?php echo $idp; ?>"> <font color="white"> <?php echo $tits?></font></a></p>
                                <?php } ?>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-4 wthree_latest_albums_grid_left">
                    <figure class="effect-julia">
                        <img src="images/tag.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <div class="w3l_banner_figure">
                                <?php
                                $sel = "select * from music where language=3";
                                $n = mysqli_query($connection, $sel);
                                while ($x = mysqli_fetch_assoc($n)){
                                    $idp = $x['id'];
                                    $tits = $x['title'];
                                    ?>
                                    <p><a href="into_all/single_page.php?id=<?php echo $idp; ?>"> <font color="white"> <?php echo $tits?></font></a></p>
                                <?php } ?>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 wthree_latest_albums_grid_left">
                    <figure class="effect-julia">
                        <img src="images/raf.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <div class="w3l_banner_figure">
                                <?php
                                $sel = "select * from music where language=2";
                                $n = mysqli_query($connection, $sel);
                                while ($x = mysqli_fetch_assoc($n)){
                                    $idp = $x['id'];
                                    $tits = $x['title'];
                                    ?>
                                    <p><a href="into_all/single_page.php?id=<?php echo $idp; ?>"> <font color="white"> <?php echo $tits?></font></a></p>
                                <?php } ?>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //latest-albums -->
<?php include "include/index_footer.php"?>