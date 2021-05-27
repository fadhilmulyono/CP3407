<div id="main">
        
        
		  <div class="clear"></div>
          
            
            <div class="full_w" id="form_geje">
			  <div class="h_title">Check In Tenants </div>
				<form action="<?php echo base_url(); ?>Admin/check_in_data" method="post" enctype="multipart/form-data">
				
					<div class="element">
						<label for="tenant_name"> Tenant Name <span class="red">(required)</span></label>
						<input id="tenant_name" name="tenant_name" class="text " required>
					</div>

					<div class="element">
						<label for="phone_no"> Phone Number <span class="red">(required)</span></label>
						<input type="number" id="phone_no" name="phone_no" class="text " required>
					</div>

					<div class="element">
						<label for="email"> Email <span class="red">(required)</span></label>
						<input type="email" id="email" name="email" class="text " required>
					</div>
                    
                    <div class="element">  
                        <label for="address"> Address <span class="red">(required)</span></label>
						<textarea class="textarea" name="address" rows="4" required></textarea>
                    </div>

					<div class="element">
						<label for="nationality"> Nationality <span class="red">(required)</span></label>
						<input id="nationality" name="nationality" class="text " required>
					</div>

					<div class="entry">
					  <button type="submit" class="add">Save </button> <button href="<?php echo base_url(); ?>Admin" class="cancel">Cancel</button>
					</div>
				</form>
		  </div>
            
            
	  </div>
	  