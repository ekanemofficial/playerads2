<?php require_once('template-parts/home-header.php');?>

		<!-- nav ends here -->
		<div class="container">
			<div class="row" style="border:0px solid #ccc;">
				<div class="wrapper" style="padding: 0;margin: 0px auto;height: auto !important;">
					<div class="col-md-4">
						<div class="textBox">
							<h2> New Here ?	</h2>
							<p>
								Create an account in less than 30sec and conneect with over 1000,000<span style="color: yellow">+</span> people.
							</p>
							<img src="img/2.svg" class="img-responsive" class="" style="width: 400px;height: auto;">
						</div>
					</div>
					<div class="col-md-4 text-center box-me" style="">
						<div class="box">
							<h4>Sign Up</h4>

							<form method="post" class="loginForm">
								<div class="form-group">
			                    	<select class="p-control" name="usertype" required>
			                    		<option selected="selected">Select User Type</option>
			                    		<option value="0">Player</option>
			                    		<option value="1">Agent</option>
			                    		<option value="2">Scout</option>
			                    		<option value="3">Coach</option>
			                    		<option value="4">Club</option>
			                    		<option value="5">Academy</option>
			                    		<option value="6">Partner</option>
			                    	</select>
								</div>

								<div class="form-group">
									<input type="text" name="username" class="p-control" required="" placeholder="Username" >
								</div>
								<div class="form-group">
									<input type="text" name="email" class="p-control" required="" placeholder="Enter Email...">
									
								</div>
								<div class="form-group">
									<input type="password" name="password"  class="p-control" required="" placeholder="Enter Password...">
								</div>
								<div class="form-group">
									<input type="password" name="cpassword"  class="p-control" required="" placeholder="Confirm Password">
								</div>
								<div class="form-group">
									<button type="submit" name="login" class="btn btn-primary btn-block loginBtn">SIGN UP</button>
								</div>
								<p style="position: relative;">
									<span class="or">OR </span>
								</p>
								<button class="btn btn-primary btn-block face"> <i class="fa fa-facebook"></i> Sign Up with Facebook</button>
								<!-- <a href="#">Forgot Password? </a> -->

							</form>
							
						</div>
						<div class="col-md-12 text-center col-y">
							<span> Already one of us ?  <a href="signin.php" style="color: #007bff">Log In</a></span>
						</div>

					</div>
					<div class="col-md-4"></div>
					
				</div>
			</div>
		</div>
		<!-- content ends here -->
	</section>

<?php require_once('template-parts/footer.php');?>
