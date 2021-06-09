


<div class="row" style="margin-top: 20px;">
	<div class="col-md-12" style="padding: 0px;">
		<h5 style="color: #0d3455;text-align: left;">ADD CAREER EXPERIENCE</h5>

		<form method="post" id="profileForm" class="profileForm clearfix">
				<div class="form-group col-md-4" id="teamOption">
					<label for="team_name">Team Name</label>
					<select class="form-control" name="team_name" id="team_name">
						<option selected="selected">Select Team</option>
					</select> 
				</div>
				<div class="form-group col-md-4">
					<label for="club_city">Team City Location</label>
					<select class="form-control" name="club_city" id="club_city">
						<option selected="selected">Select team location</option>

					</select> 
				</div>
				<div class="form-group col-md-4">
					<label for="league">League</label>
					<select class="form-control" name="league" id="league">
						<option selected="selected">Select League</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="division">Division</label>
					<select class="form-control" name="division" id="division">
						<option selected="selected">Select Division</option>
					</select>
				</div>	
				<div class="form-group col-md-4">
					<label for="season_start">Season Start</label>
					<select class="form-control" name="season_start" id="season_start">
						<option selected="selected">Select Seasons Start</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="season_end">Season Ends</label>
					<select class="form-control" name="season_end" id="season_end">
						<option selected="selected">Select Seasons End</option>>
					</select>
				</div>				
				<div class="form-group col-md-4">
					<label for="matches">Match Played</label>
					<input type="text" name="matches" id="matches" placeholder="Number Of Matches Played." class="form-control">

				</div>
				<div class="form-group col-md-4">
					<label for="goals">Goals Scored</label>
					<input type="text" name="goals" id="goals" placeholder="Number Of Goals Scored..." class="form-control">
				</div>
				<div class="form-group col-md-4">
					<label for="assist">Assist</label>
					<input type="text" name="assist" id="assist" placeholder="Number Of Assist Made..." class="form-control">
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 clearfix">
					<button type="submit" id="careerExp_btn" class="btn btn-default btn-black-sm " name="careerExp_btn"><span class="fa fa-plus"></span> ADD CAREER EXPERIENCE</button>
				</div>
				<div id="display_stats"></div>						
		</form>
	</div>
</div>



