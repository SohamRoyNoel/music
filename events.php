<?php include "include/uni_header.php"?>
    <!-- music -->
    <div class="about w3_music">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Symphony <span>music</span> Schedule</h3>
            <p class="w3_agileits_para">Quisque faucibus vel leo a luctus.</p>
            <div class="wthree_latest_albums_grids">
                <div class="cntl"> <span class="cntl-bar cntl-center"> <span class="cntl-bar-fill"></span> </span>
                    <div class="cntl-states">
                        <?php
                        $sel = "select * from event";
                        $pas = mysqli_query($connection, $sel);
                        $x=01;
                        while ($row=mysqli_fetch_assoc($pas)){
                            $name=$row['name'];
                            $date=$row['date'];
                            $description=$row['description'];
                            $image=$row['image'];

                            ?>
                            <!--                        -->
                            <div class="cntl-state">
                                <div class="cntl-content">
                                    <h4><?php echo $date?></h4>
                                    <p><?php echo $name?></p>
                                </div>
                                <div class="cntl-image">
                                    <img style="height: 300px" src="into_all/album_image/<?php echo $image; ?>" alt=" " class="img-responsive" />
                                    <div class="w3ls_cntl_image_pos">
                                        <p><?php echo substr($description, 0, 40)?></p>
                                    </div>
                                </div>
                                <div class="cntl-icon cntl-center"><?php echo $x; ?></div>
                            </div>
                            <?php
                            $x++;
                        }
                        ?>
                        <!--                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //music -->
    <!-- music-bottom -->
    <div class="music-bottom">
        <div class="container">
            <h3>Sign up to receive latest album updates</h3>
            <br><br>
            <div class="">
                <center><a href="login.php"><input type="submit" class="btn-lg" value="Sign Up"></a></center>
            </div>
        </div>
    </div>
    <!-- //music-bottom -->

<?php include "include/uni_footer.php"?>