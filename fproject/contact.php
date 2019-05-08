<?php include_once 'conn/joinc.php'; 
include_once 'conn/login.php';?>
<!DOCTYPE html>
<html>

<head>
	<title>Stretch an Education Category Bootstrap responsive WebTemplate | Contact :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
</head>

<body>
	<!--Header-->
	
	<?php include_once 'head/othnav.php'; 
    include_once 'head/signmodal.php';
    ?>
	<!--/short-->
	<div class="services-breadcrumb-w3ls-agile">
		<div class="inner_breadcrumb">

			<ul class="short">
                            <li><a href="index.php">Home</a><span>|</span></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
	<!--//short-->
	<!-- //inner_content -->

	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

						<div class="login-m_page_img">

							<img src="images/model.jpg" alt=" " class="img-responsive" />

						</div>
						<div class="login-m_page">
							<h3 class="sign">Sign In</h3>
							<div class="login-form-wthree-agile">
								<form action="#" method="post">
									<input type="email" name="email" placeholder="E-mail" required="">
									<input type="password" name="password" placeholder="Password" required="">
									<div class="tp">
										<input type="submit" value="Sign In">
									</div>
								</form>
							</div>
							<div class="login-social-grids">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

						<div class="login-m_page_img">

							<img src="images/model.jpg" alt=" " class="img-responsive" />

						</div>
						<div class="login-m_page">
							<h3 class="sign">Sign Up</h3>
							<div class="login-form-wthree-agile">
								<form action="#" method="post">
									<input type="text" name="name" placeholder="Username" required="">
									<input type="email" name="email" placeholder="Email" required="">
									<input type="password" name="password" placeholder="Password" required="">
									<input type="password" name="password" placeholder="Confirm Password" required="">
									<input type="submit" value="Sign Up">
								</form>
							</div>
							<p><a href="#"> By clicking Sign up, I agree to your terms</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->

	<!--//Header-->
	<div class="banner_bottom">
		<div class="container">

			<div class="mail_form">
				<h3 class="headerw3">Send Us a Message</h3>
				<div class="inner_sec_w3_agileinfo">
					<form action="#" method="post">
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-13">
							<span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
						</label>
						</span>
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-14">
							<span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
						</label>
						</span>
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-15">
							<span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
						</label>
						</span>
						<textarea name="Message" placeholder="Your comment here..." required=""></textarea>
						<input type="submit" value="Submit">
					</form>

				</div>
			</div>
			<div class="clearfix"> </div>

		</div>
	</div>
	<!--footer-->
	<?php include_once 'head/footer.php'; ?>
	<!--/footer -->
	<!-- js -->
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


</body>

</html>