<?php require_once('template-parts/header.php');?>

	<section>
		<div class="container">
			<div class="row" style="border:0px solid #ccc">
				<div class="content">
					<div class="col-xs-12 col-sm-12 col-md-12" style="">
						<div class="row textBox" style="padding: 5px;border:0px solid #ccc">

        
					        <form id="my_form_id">
					            Your Email Address: <input type="text" id="email" /><br>
					            <input type="submit" />
					        </form>
        

													
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- content ends here -->
	</section>

<?php require_once('template-parts/footer.php');?>
        <!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <script>
        $(document).ready(function(){
            $('#my_form_id').on('submit', function(e){
                //Stop the form from submitting itself to the server.
                alert('OHHHHH');
                e.preventDefault();
                var email = $('#email').val();
                $.ajax({
                    type: "POST",
                    url: 'submission.php',
                    data: {email: email},
                    success: function(data){
                        alert(data);
                    }
                });
            });
        });
    </script>