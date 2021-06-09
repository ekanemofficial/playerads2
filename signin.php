<?php require_once('template-parts/home-header.php');?>


		<div class="container">
			<div class="row" style="border:0px solid #ccc;">
				<div class="wrapper" style="padding: 0;margin: 0px auto;height: auto !important;">
					<div class="col-md-4 ">
						<div class="textBox">
							<h2>
								Already one of us ?
							</h2>
							<p>
								Log in and enjoy unlimitted access to over 1000000+ Professionals and Sport enthisiasts...
							</p>
							<img src="img/2.svg" class="img-responsive" class="" style="width: 450px;height: auto;">
						</div>
					</div>
					<div class="col-md-4 text-center box-me" style="">
						<div class="box" style="padding: 10px 20px;">

							<h4>SIGN IN</h4>

							<form method="post" class="loginForm">

								<div class="form-group">
									<input type="text" name="email" class="p-control" required="" placeholder="Enter Email...">
									
								</div>
								<div class="form-group">
									<input type="password" name="password"  class="p-control" required="" placeholder="Enter Password...">
								</div>
								<div class="form-group">
									<button type="submit" name="login" class="btn btn-primary btn-block loginBtn">Log In</button>
								</div>
								<p style="position: relative;">
									<span class="or">OR </span>
								</p>
								<button class="btn btn-primary btn-block face"> <i class="fa fa-facebook"></i> Sign in with facebook</button>
								<a href="#" class="small">Forgot Password? </a>

							</form>
							
						</div>
						<div class="col-md-12 text-center col-y">
							<span> Not one of us yet?  <a href="signup.php" style="color: #007bff">Create account</a></span>
						</div>

					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
		<!-- content ends here -->
	</section>

<?php require_once('template-parts/footer.php');?>
