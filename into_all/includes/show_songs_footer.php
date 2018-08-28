
<script type="text/javascript">
    $(window).load(function() {

        $("#flexiselDemo1").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 2
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:800,
                    visibleItems: 4
                }
            }
        });
    });
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</div>
</div>
<div class="clearfix"></div>
<!--body wrapper end-->
<!-- /w3l-agile -->
</div>


<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>
</html>