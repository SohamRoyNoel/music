<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-4 agileinfo_footer_grid">
            <h3>About Us</h3>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="agileits_footer_grid_gallery">
                <div class="agileits_footer_grid_gallery1">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="agileits_footer_grid_gallery1">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/3a.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="agileits_footer_grid_gallery1">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/4.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="agileits_footer_grid_gallery1">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="agileits_footer_grid_gallery1">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/8.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="agileits_footer_grid_gallery1">
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4 agileinfo_footer_grid">
            <h3>Twitter Posts</h3>
            <ul class="w3agile_footer_grid_list">
                <li>Ut aut reiciendis voluptatibus maiores <a href="#">http://symphony@example.com</a> alias, ut aut reiciendis.
                    <span><i class="fa fa-twitter" aria-hidden="true"></i>02 days ago</span></li>
                <li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://symphony@example1.com</a> ut aut
                    voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i>03 days ago</span></li>
            </ul>
        </div>
        <div class="col-md-4 agileinfo_footer_grid">
            <h3>Social Media</h3>
            <ul class="agileinfo_social_icons">
                <li><a href="#" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span><i>-</i>Facebook</a></li>
                <li><a href="#" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span><i>-</i>Twitter</a></li>
                <li><a href="#" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span><i>-</i>Google+</a></li>
                <li><a href="#" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span><i>-</i>Instagram</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- copy-right -->
<div class="w3agile_copy_right">

</div>
<!-- //copy-right -->
<!-- bootstrap-pop-up -->

<!-- //bootstrap-pop-up -->
<!-- flexisel -->
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: false,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems:2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>