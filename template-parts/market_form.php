					<div id="createMarket" class=""  style="overflow: hidden; display: block;border:0;outline: 0" >
					    <!-- Modal content-->
					    <div class="modal-content" style="margin-top: -10px;background: url('img/pattern/2.png');border-radius: 0 !important">
					      <div class="" style="padding: 10px 10px;border:1px solid #fff">
					      	<!-- <h5 style="letter-spacing: -1.5px;font-weight: 600;font-size: 20px;text-align: center;line-height: 40px;">CREATE MARKET</h5> -->
							<form method="post" class="create_marketForm" id="insert_form" style="padding-top: 10px;">
								<div class="row" style="padding: 0 0px;">
									<div class="form-group col-md-12" style="margin-top: -5px;">
										<label for="market_title">Market Title</label>
										<input type="text" name="market_title" placeholder="Enter Market Title" id="market_title" class="form-control" style="font-size: 12px;" required="">
									</div>
									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_type">Market Type</label>
										<select id="market_type" name="market_type" class="form-control" style="font-size: 12px">
											<option selected="selected">Select Market Type</option>
											<option value="0">Football Trial</option>
											<option value="1">Player Wanted</option>
											<option value="2">Player Offer</option>
											<option value="3">Football Events</option>
										</select>
									</div>
									

									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_organizer">Organiser</label>
										<input type="text" name="market_organizer" id="market_organizer" placeholder="Enter Organizer" class="form-control" style="font-size: 12px;" required="">
									</div>
									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_user_level">User Level</label>
										<select id="market_user_level" name="market_user_level" class="form-control" placeholder="" style="font-size: 12px;">
											<option selected="selected">Select User Level</option>
											<option value="Amatuer">Amatuer</option>
											<option value="Intermediary">Intermediary</option>
											<option value="Professional">Professional</option>
										</select>
									</div>

									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_address">Address</label>
										<input type="text" name="market_address" id="market_address" placeholder="Enter Market Address" class="form-control" style="font-size: 12px;" required="">
									</div>
									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_country">Country Of Event</label>
										<select id="market_country" name="market_country" class="form-control" style="font-size: 12px;">
											<option selected="selected">Select Market location</option>					
											<option value="Aaland">Aaland</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Albania">Albania</option>
										</select>
									</div>
									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_age_range">Age Range</label>
										<input type="text" name="market_age_range" id="market_age_range" placeholder="Enter Market Age Range" class="form-control" style="font-size: 12px;line-height: 17px" required="">
									</div>
									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_gender">Gender</label>
										<select id="market_gender" name="market_gender" class="form-control" style="font-size: 12px;line-height: 15px;">
											<option selected="selected">Select Market Gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											<option value="Male &amp; Female">Male &amp; Female</option>
										</select>
									</div>

									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_price1">Market Price</label>
										<input type="text" id="market_price1" name="market_price1" placeholder="Enter Market Regular Price (Pls. indicate currency eg.$300)" class="form-control" style="font-size: 12px;line-height: 17px" required="">
									</div>

									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_post_date">Start Date</label>
										<input type="date" name="market_post_date" id="market_post_date" placeholder="Enter Market Start Date" class="form-control" style="font-size: 12px;line-height: 17px" required="">
									</div>

									<div class="form-group col-md-6" style="margin-top: -5px;">
										<label for="market_exp_date">End Date</label>
										<input type="date" name="market_exp_date" placeholder="Enter Market End Date" class="form-control" style="font-size: 12px;line-height: 17px" required="">
									</div>

									<div class="form-group col-md-12" style="margin-top: -5px;">
										<label for="market_desc">Market Short Description</label>
										<textarea name="market_short_desc" minlength="200" maxlength="200" id="market_short_desc" class="form-control" placeholder="Enter Short Description" style="font-size: 12px;" required=""></textarea>
									</div>

									<div class="form-group col-md-12" style="margin-top: -5px;">
										<label for="market_desc">Market Long Description</label>
										<textarea name="market_desc" minlength="500" maxlength="1000" id="market_desc" class="form-control" placeholder="Enter Long Description" style="font-size: 12px;" required=""></textarea>
									</div>

									<div class="form-group col-md-12" style="margin-top: -5px;">
										<label for="market_conditions">Conditions For Market</label>
										<textarea id="market_conditions" name="market_conditions" class="form-control simple_ad textarea " placeholder="Enter Market Conditions (separate with comma's to enter more than one)" style="font-size: 12px;" required=""></textarea>
									</div>

									<div class="form-group col-md-5 clearfix" style="margin-top: 0px;">
										<button type="submit" id="insert" name="insert" value="Insert" class="btn btn-block size-2 hover-10" style="padding: 10px 0;color:#fff;border-radius:0 !important;font-size:12px;background:#1f6dc0;margin-bottom: -10px;">
											<span class="fa fa-bullhorn" style="color:#fff"></span> Create Market</button>
									</div>
								</div>
							</form>
					      </div>
					    </div>
					</div>