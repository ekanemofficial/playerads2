
<div class="row" style="">
	<div class="col-md-12" style="padding: 0px;margin-top: 18px;">

		<h5 style="color: #0d3455;text-align: left;">CAREER INFORMATION</h5>


		<form method="post" class="profileForm clearfix career" id="profileForm">
			<div class="form-group  col-md-6">
				<select class="form-control" value="" name="position" id="position">
					<option selected="selected">Preferred Position</option>
				</select>
			</div>
			<div class="form-group  col-md-6">
				<select class="form-control" name="alternative_position" id="alternate_position">
					<option selected="selected">Alternative Position</option>	
				</select>
			</div>
			<div class="form-group  col-md-6">					
				<select class="form-control" name="strong_foot" id="strong_foot">
					<option selected="selected">Strong Foot</option>
					<option value="Right">Right</option>
					<option value="Left">Left</option>
					<option value="Both">Both</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<select class="form-control" value="<?php echo $current_club; ?>" name="current_club" id="current_club">
					<option selected="selected">Current Club</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<select class="form-control" value="" name="club_city_location" id="club_city_location">
					<option selected="selected">Club City</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<select class="form-control" value="" name="league" id="league">
					<option value="" selected="selected">Current League</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<select class="form-control" value="" name="division" id="division">
					<option selected="selected">Current Division<option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<select class="form-control" name="career_level"  id="career_level">
					<option selected="selected">Career level</option>
					<option value="beginner">Beginner</option>
					<option value="amatuer">Amatuer</option>
					<option value="Pro">Pro</option>
				</select> 
			</div>
			<div class="form-group col-md-4">
				<select class="form-control" name="contract_status" id="contract_status">
					<option selected="selected">Contract Status</option>
					<option value="Free Player">Free Player</option>
					<option value="Under Contract">Under Contract</option>
					<option value="On Loan">Listed for loan</option>
				</select>
			</div>
			<div class="form-group clearfix col-xs-12 col-sm-12 col-md-4">
				<button type="submit" name="save_career" class="btn btn-default btn-black-sm" id="save_career"><span class="fa fa-save">	</span> SAVE CAREER INFORMATION</button>
				<div id="status"></div>
			</div>
		</form>
	</div>
</div>
