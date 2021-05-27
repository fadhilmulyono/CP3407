<div id="main">
        
        
		  <div class="clear"></div>
          
            
            <div class="full_w" id="form_geje">
			  <div class="h_title">Edit Booking Data </div>
              <form action="<?php echo base_url(); ?>Admin/accept_booking/<?php echo $booking_data["id"]; ?>" method="post" enctype="multipart/form-data">
					<div class="element">
						<label for="booking_name"> Booking Name </label>
						<input id="booking_name" name="booking_name" class="text " value="<?php echo $booking_data['booking_name'] ?>" disabled>
					</div>

					<div class="element">
						<label for="phone_no"> Phone Number </label>
						<input type="number" id="phone_no" name="phone_no" class="text " value="<?php echo $booking_data['phone_no'] ?>" disabled>
					</div>

					<div class="element">
						<label for="email"> Email Address </label>
						<input type="email" id="email" name="email" class="text " value="<?php echo $booking_data['email'] ?>"disabled>
					</div>

                    <div class="element">
						<label for="checkin_date"> Check-In Date </label>
						<input type="date" id="checkin_date" name="checkin_date" class="text " value="<?php echo $booking_data['checkin_date'] ?>"disabled>
					</div>

                    <div class="element">
						<label for="stay_duration"> Stay Duration <span class="red">(months)</span></label>
						<input type="number" id="stay_duration" name="stay_duration" class="text " value="<?php echo $booking_data['stay_duration'] ?>"disabled>
					</div>

                    <div class="element">
                        <label> Check Booking Status <span class="red">(Answer All Questions)</span></label>
                        <input type="checkbox" id="offer_letter" name="offer_letter">	
                        <span> Has the applicant signed the booking offer and acceptance letter? </span><br>
                        <input type="checkbox" id="agreement" name="agreement">	
                        <span> Has the applicant signed the contract and agreement document? </span><br>
                        <input type="checkbox" id="payment" name="payment">	
                        <span> Has the applicant settled the payment of first installment and rental fees? </span><br>	
                        <input type="checkbox" id="empty_rooms" name="empty_rooms">	
                        <span> Are there any available empty rooms for the incoming tenant? </span>		
					</div>

					<div class="entry">
					  <button type="submit" class="add">Accept Booking </button>
					  <button type="submit" formaction="<?php echo base_url(); ?>Admin/reject_booking/<?php echo $booking_data["id"]; ?>" class="cancel">Reject Booking</button>
					</div>
				</form>
		  </div>
            
            
	  </div>
	  