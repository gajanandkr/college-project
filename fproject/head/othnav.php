<div class="top-bar_sub_w3layouts_agile">
		<h6>MAKE CREATIVITY A HABIT</h6>
		<div class="search" style="width: auto">
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
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Register <span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
                                                                                <li><a href="join.php">Student</a></li>
                                                                                <li><a href="teajoinjoin.php">Teacher</a></li>
									</ul>
								</li>
								<li><a href="courses.php">Notice</a></li>
								<li><a href="dept.php">View Faculty</a></li>
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
