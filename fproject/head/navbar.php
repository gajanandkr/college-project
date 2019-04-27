<div class="top-bar_sub_w3layouts_agile">
		<h6>MAKE CREATIVITY A HABIT </h6>
		<div class="search">
			
			<?php 
                            if(isset($_SESSION['uname']))
                            {
                                $c=$_SESSION['uemail'];
                                echo "<a href='conn/update.php?id=$c' class='sign dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span>".$_SESSION['uname']."</a>";
                                echo "<ul class='dropdown-menu'>
                                                                            <li><a href='conn/logout.php>Log out<span class='fa fa-angle-down'></span></a></li>
									</ul>";
                            }
                            else
                            {
                                echo "<h5><a href='#' class='sign'><span class='glyphicon glyphicon-user'></span> Guest</a></h5>";
                                echo "<h5><a class='sign' href='#' data-toggle='modal' data-target='#myModal2'>Login</a></h5>";
                            }
                        ?>
			
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="header" id="home">

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
						<h1><a class="navbar-brand" href="index.php">Stay At College</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="top_nav">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About</a></li>
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
		<!-- banner-text -->
		<div class="slider" >
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="banner-top">
							<div class="banner-info-w3ls-agileinfo">
								<h3>Opportunities For Lifelong Learning.</h3>
								
							</div>

						</div>
					</li>
					<li>
						<div class="banner-top1">
							<div class="banner-info-w3ls-agileinfo">
								<h3>Education is a path, not a destination</h3>
								
							</div>

						</div>
					</li>
					<li>
						<div class="banner-top2">
							<div class="banner-info-w3ls-agileinfo">
								<h3>Opportunities For Lifelong Learning.</h3>
								
							</div>

						</div>
					</li>
					<li>
						<div class="banner-top3">
							<div class="banner-info-w3ls-agileinfo">
								<h3>Education is a path, not a destination</h3>
								
							</div>

						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>

			<!--banner Slider starts Here-->
		</div>
		<!--//Slider-->
	</div>