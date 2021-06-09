
<div class="row">
	<div class="col-md-12" style="padding: 0;margin-bottom: 20px;">
		<h5 style="color: #0d3455;text-align: left;">EDIT PERSONAL INFORMATION</h5>

		<form method="post" action="" class="profileForm clearfix" id="profileForm">
			<div class="form-group col-md-6">
				<label for="fname">Firstname</label>
				<input type="text" id="fname" value="" name="fname" class="form-control" placeholder="Enter Firstname">
			</div>
			<div class="form-group col-md-6">
				<label for="lname">Lastname</label>
				<input type="text" id="lname" name="lname"  value="" class="form-control" placeholder="Enter Lastname">
			</div>
			<div class="form-group col-md-6">
				<label for="age">Age</label>
				<input type="date" id="age" name="age" value=""  placeholder="Select Age" class="form-control"  style="color: #888">
			</div>
			<div class="form-group col-md-6">
				<label for="marital_status">Marital Status</label>
				<select name="marital_status" id="marital_status" class="form-control" style="color: #888">
					<option  selected='selected'>Marital status</option>
					<option value="Single">Single</option>
					<option value="Married"> Married</option>
					<option value="Complicated">It's Complicated </option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="country">Country</label>
				<select name="country" id="country" class="form-control"  style="color: #888">
					<option  selected="selected">Nigeria</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="state">State</label>
				<input type="text" name="state" id="state" placeholder="Please Enter State..." class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label for="passport">Passport ID</label>
				<input type="text" name="passport" id="passport" value="" placeholder="Please Enter Passport ID..." class="form-control" >
			</div>
			<div class="form-group col-md-4">
				<label for="height">Height</label>
				<input type="text" name="height" id="height" value="" placeholder="Please Enter Height..." class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label for="weight">Weight</label>
				<input type="text" name="weight" id="weight" value="" placeholder="Please Enter Weight..." class="form-control">
			</div>
			<div class="form-group clearfix col-xs-12 col-sm-12 col-md-4">
				<button type="submit" name="save_personal" class="btn btn-default btn-black-sm"  id="save_personal">
					<span class="fa fa-save"></span> SAVE PERSONAL INFORMATION
				</button>
			</div>
		</form>
	</div>
</div>