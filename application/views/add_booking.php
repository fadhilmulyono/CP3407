<div id="main">
        
        
		  <div class="clear"></div>
          
            
            <div class="full_w" id="form_geje">
			  <div class="h_title">Edit Booking Data </div>
              <form action="<?php echo base_url(); ?>Admin/insert_bookings" method="post" enctype="multipart/form-data">
					<div class="element">
						<label for="booking_name"> Booking Name <span class="red">(required)</span></label>
						<input id="booking_name" name="booking_name" class="text " required>
					</div>

					<div class="element">
						<label for="phone_no"> Phone Number <span class="red">(required)</span></label>
						<input type="number" id="phone_no" name="phone_no" class="text " required>
					</div>

					<div class="element">
						<label for="email"> Email Address <span class="red">(required)</span></label>
						<input type="email" id="email" name="email" class="text " required>
					</div>

                    <div class="element">
						<label for="checkin_date"> Check-In Date <span class="red">(required)</span></label>
						<input type="date" id="checkin_date" name="checkin_date" class="text " required>
					</div>

                    <div class="element">
						<label for="stay_duration"> Stay Duration <span class="red">(months)</span><span class="red"> (required)</span></label>
						<input type="number" id="stay_duration" name="stay_duration" class="text " required>
					</div>

					<div class="entry">
                        <button type="submit" class="add">Save </button> <button href="<?php echo base_url(); ?>Admin" class="cancel">Cancel</button>		  
					</div>
				</form>
		  </div>
            
            
	  </div>