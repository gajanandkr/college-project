<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile ">

						<div class="login-m_page_img">

							<img src="images/model.jpg" alt=" " class="img-responsive" />

						</div>
						<div class="login-m_page">
							<h3 class="sign">Sign In</h3>
							<div class="login-form-wthree-agile">
								<form  method="POST">
                                                                    <input type="email" name="email" id="email" placeholder="E-mail" required="">
									<input type="password" name="password" id="password" placeholder="Password" required="">
									<div class="tp">
                                                                            <input type="submit" name="Submit" id="Submit" value="Sign In">
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
                                                        <p><a href="join.php" > Don't have an account?</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

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

<!--  script code for modal login-->
<!-- web lesson -->
<!--<script>
    $(document).ready(function(){
        $('#Submit').click(function(){
            var email= $('#email').val();
            var password = $('#password').val();
            
            if(email !='' && password!=''){
                $.ajax({
                    url:"conn/joinc.php",
                    method:"POST",
                    data:{email:email, password:password}
                    success:function(data){
                        if(data=='no'){
                            alert("wrong data");
                        }
                        else{
                            $('#myModal2').hide();
                            location.reload();
                        }
                    }
                });
            }
            else{
                alert("Invalid email or password");
            }
        });
        $('#logout').click(function(){
           var action = "logot";
           $.ajax({
               url:"logout.php",
               method:"POST",
               data:{action,action),
                   success:function()
                   {
                       location.reload();
                   }
           })
        });
    });

</script>-->