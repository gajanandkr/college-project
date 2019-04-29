<div class="top-bar_sub_w3layouts_agile">
		<h6>MAKE CREATIVITY A HABIT</h6>
		<div class="search">
			<?php if(isset($_SESSION['uname']))
                        {
                            $c=$_SESSION['uemail'];
                        ?>
                    <h5><a href='#' class="sign"><span class='glyphicon glyphicon-user'></span>Hello- <?php echo $_SESSION['uname'];?>&nbsp; &nbsp;</a></h5>
                    <h5><a href="logout.php" id="logout" class="sign">Logout</a></h5>    
                        <?php }
                            else{
                        ?>
                    <h5><a class="sign" href="#" data-toggle="modal" data-target="#myModal2"> Login</a></h5>
                            <?php } ?>
		</div>
		<div class="clearfix"> </div>
</div>

<div class="header inner_banner" id="home">
		<!--/top-bar-->
		<div class="top-bar">
			<div class="header-nav-agileits">

				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						<h1><a class="navbar-brand" href="index.php">Stay At College <span>Online Education</span></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="top_nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php" class="active">About</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Drop Down <span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="dept.php">Services</a></li>
										<li><a href="join.php">Join now</a></li>
									</ul>
								</li>
								<li><a href="courses.php">Courses</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</nav>

			</div>
		</div>
		<!--//top-bar-->
		<!--/ banner-text -->
		<!--// banner-text -->
	</div>

<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>