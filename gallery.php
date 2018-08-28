<!DOCTYPE html>
<html lang="en">
<head>
<title>Symphony.com</title>
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
<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head>
	
<body>

<!-- gallery -->
	<div class="latest-albums">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Our Latest <span>Gallery</span></h3>
			<div class="wthree_latest_albums_grids gallery">
				<div class="col-md-4 agile_gallery_grid">
					<div class="agileits_w3layouts_gallery_grid w3_agileits_gallery_grid">
						<a href="into_all/show_songs.php?para=old_eng">
							<img src="images/15.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>old Songs</h3>
									<p>Evergreen English Songs</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid">
						<a href="into_all/show_songs.php?para=old_hin">
							<img src="images/8.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>OLD Songs</h3>
									<p>Living with Hindi legends</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid">
						<a href="into_all/show_songs.php?para=old_ben">
							<img src="images/9.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>OLD Songs</h3>
									<p>Passion Comes with bengali songs</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 agile_gallery_grid">
					<div class="agileits_w3layouts_gallery_grid">
						<a href="into_all/show_songs.php?para=new_eng">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>NEW Songs</h3>
									<p>Make your mind with buzz</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid w3_agileits_gallery_grid">
						<a href="into_all/show_songs.php?para=new_hin">
							<img src="images/13.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>new Songs</h3>
									<p>Live with Hindi melody</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid">
						<a href="into_all/show_songs.php?para=new_ben">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>new Songs</h3>
									<p>Romance comes with latest Bengali songs</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 agile_gallery_grid">
					<div class="agileits_w3layouts_gallery_grid">
						<a href="into_all/show_songs.php?para=classical">
							<img src="images/10.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Classical</h3>
									<p>Dive into the world of classical music</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid">
						<a href="into_all/show_songs.php?para=dj">
							<img src="images/9dj.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>DJ</h3>
									<p>DJ makes your night awesome</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid w3_agileits_gallery_grid">
						<a href="into_all/show_songs.php?para=other">
							<img src="images/14.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>miscellaneous</h3>
									<p>Thats not end, checkout here for more music</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //gallery -->	
<!-- gallery-pop-up -->
	<script type="text/javascript" src="js/simple-lightbox.js"></script>
	<script>
		$(function(){
			var $gallery = $('.gallery a').simpleLightbox();

			$gallery.on('show.simplelightbox', function(){
				console.log('Requested for showing');
			})
			.on('shown.simplelightbox', function(){
				console.log('Shown');
			})
			.on('close.simplelightbox', function(){
				console.log('Requested for closing');
			})
			.on('closed.simplelightbox', function(){
				console.log('Closed');
			})
			.on('change.simplelightbox', function(){
				console.log('Requested for change');
			})
			.on('next.simplelightbox', function(){
				console.log('Requested for next');
			})
			.on('prev.simplelightbox', function(){
				console.log('Requested for prev');
			})
			.on('nextImageLoaded.simplelightbox', function(){
				console.log('Next image loaded');
			})
			.on('prevImageLoaded.simplelightbox', function(){
				console.log('Prev image loaded');
			})
			.on('changed.simplelightbox', function(){
				console.log('Image changed');
			})
			.on('nextDone.simplelightbox', function(){
				console.log('Image changed to next');
			})
			.on('prevDone.simplelightbox', function(){
				console.log('Image changed to prev');
			})
			.on('error.simplelightbox', function(e){
				console.log('No image found, go to the next/prev');
				console.log(e);
			});
		});
	</script>
<!-- //gallery-pop-up -->

<!-- copy-right -->

<!-- //copy-right -->
<!-- bootstrap-pop-up -->

<!-- //bootstrap-pop-up -->
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