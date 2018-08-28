<?php include "include/uni_header.php"?>

    <!-- mail -->
<?php
if (!isset($_SESSION['idxxp'])){
    header("Location: login.php");
}
?>

    <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Your Profile <span><?php echo $_SESSION['u_name'];?></span></h3>
            <div class="wthree_latest_albums_grids gallery">

                <div class="col-md-4 w3_agileits_mail_grid_right">
                    <div class="wthree_mail_grid_right">
                        <?php
                        if (isset($_POST['submit'])){
                            $id = $_SESSION['id'];
                        }
                        ?>
                        <img src="user_image/0032723c0324bf1509290005eb81f7ce_user-group-icon-junior-iconset-treetog-artwork_256-256.png" alt=" " class="img-responsive" />
                        <h4><?php echo $_SESSION['name'];?> <span><?php echo $_SESSION['u_name'];?></span></h4>
                        <ul class="agileinfo_phone_mail">
                            <li><i class="fa fa-mail-reply-all" aria-hidden="true"></i>Email: <?php echo $_SESSION['email'];?></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: <?php echo $_SESSION['phone'];?></li>
                        </ul>
                        <ul class="social_agileinfo">
                            <li><a href="#" class="w3_facebook"><i class="fa fa-sign-out"></i></a></li>
                            <li><a href="#" class="w3_twitter"><i class="fa fa-home"></i></a></li>
                            <li><a href="#" class="w3_instagram"><i class="fa fa-upload"></i></a></li>
                            <li><a href="#" class="w3_google"><i class="fa fa-download"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 agile_mail_grid_left">
                    <h1>You're now a member of music family</h1><br>
                    <h3 class="agileits_w3layouts_head"><span>Member's Right</span></h3>
                    <ul class="">
                        <li>Download Song</li>
                        <li>Request Song</li>
                        <li>Upload Song</li>
                        <li>Watch Song Videos</li>
                    </ul>

                    <center><input type="submit" id="prime" class="btn btn-primary" value="Use as non prime member"></center><br><br>
                    <h3 class="agileits_w3layouts_head"><span>Prime Member's Right</span></h3>
                    <ul class="">
                        <li>Download Song</li>
                        <li>Request Song</li>
                        <li>Upload Song</li>
                        <li>Watch Song Videos</li>
                        <li>Watch & Download Song Videos</li>
                    </ul>
                    <center><input type="submit" id="general" class="btn btn-success" value="Update as PRIME"></center>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //mail -->
<?php include "include/about_footer.php"?>