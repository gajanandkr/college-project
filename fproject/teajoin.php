<?php 
include_once 'conn/teajoinc.php';
include_once 'conn/login.php';
 ?>
<!DOCTYPE html>
<html>

<head>
	<title>Stay At Colege</title>
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
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
        
</head>

<body>
	<!--Header-->
	<?php include_once 'head/othnav.php'; 
                include_once 'head/signmodal.php';
        ?>
	<!--//inner_banner-->
	<!--/short-->
	<div class="services-breadcrumb-w3ls-agile">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="index.php">Home</a><span>|</span></li>
				<li>Join now</li>
			</ul>
		</div>
	</div>
	<!--//short-->

	<!-- Modal1 -->
	 <?php include_once 'head/othnav.php'; 
                include_once 'head/signmodal.php';
        ?>
	<!-- //Modal2 -->

	<!--//Header-->
	<!--/inner_connectent-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="headerw3">Join now</h3>
			<div class="inner_sec_w3_agileinfo">
                            <div class="register-form" style="width: 76%">
                                <form  method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-7">
						<div class="fields-grid">
							<div class="styled-input">
								<input type="text" placeholder="Your Name" name="txt_name" required="">
							</div>
							<div class="styled-input">
                                                            <input placeholder="Birth Date"  style="width: 100%;margin-bottom: 15px" name="dob" type="text" value="" onfocus="(this.type='date')" onblur="(this.type='text')" required="">
							</div>
							<div class=" agile-styled-input-top">
                                                            <select class="category2" required="" name="gender">
                                                                    <option value="" hidden="">Gender</option>
												<option value="female">Female</option>
												<option value="male">Male</option>
												<option value="other">Other</option>
											</select>
							</div>
							<div class="styled-input">
								<input type="email" placeholder="Your E-mail" name="email" required="">
							</div>
                                                        <div class="styled-input">
                                                            <input type="password" placeholder="Password" name="pass" required="">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Phone Number" name="mobile" required="">
							</div>
                                                        <div class="styled-input">
								<input type="text" placeholder="ID NO" name="idno" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
                                                            <select class="category2" required="" name="branch">
                                                                    <option value="" hidden="">Select Branch</option>
												<option value="IT">IT</option>
												<option value="CSE">CSE </option>
												<option value="ME">ME</option>
												<option value="ECE">ECE </option>
												<option value="AEIE">AEIE </option>
												<option value="EE">EE </option>
												<option value="CE">CE</option>
											</select>
								
							</div>
							
							
							<div class="clearfix"> </div>
                                                    </div>
                                                <input type="submit" name="teajoin_submit" value="Submit"><?php echo $msg;echo $msg1;echo $msg2; ?>
                                            </div>
                                            <div class="col-sm-5">
                                                <div>
                                                    <center><h4 class="headerw3">upload your picture</h4></center>
                                                    <br>
                                                    
                                                    <input class="btn" type="file" name="myfile"/>
                                                </div>
                                                <br>
                                                
                                                    
                                                
                                            </div>
                                        </div>
                                    </form>
				</div>
			</div>
		</div>
	</div>
	<!--//inner_connectent-->
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