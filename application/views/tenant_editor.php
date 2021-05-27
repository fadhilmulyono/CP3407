<div id="main">
        
        
		  <div class="clear"></div>
          
            
            <div class="full_w" id="form_geje">
			  <div class="h_title">Edit Tenant Data </div>
              <form action="<?php echo base_url(); ?>Admin/update_rooms/<?php echo $tenants_data["id"]; ?>" method="post" enctype="multipart/form-data">
					<div class="element">
						<label for="tenant_name"> Tenant Name <span class="red">(required)</span></label>
						<input id="tenant_name" name="tenant_name" class="text " value="<?php echo $tenants_data['tenant_name'] ?>" required>
					</div>

					<div class="element">
						<label for="phone_no"> Phone Number <span class="red">(required)</span></label>
						<input type="number" id="phone_no" name="phone_no" class="text " value="<?php echo $tenants_data['phone_no'] ?>" required>
					</div>

					<div class="element">
						<label for="email"> Email Address <span class="red">(required)</span></label>
						<input type="email" id="email" name="email" class="text " value="<?php echo $tenants_data['email'] ?>"required>
					</div>
                    
                    <div class="element">  
                        <label for="address"> Address <span class="red">(required)</span></label>
						<textarea class="textarea" name="address" rows="4" required><?php echo $tenants_data['address'] ?></textarea>
                    </div>

					<div class="element">
						<label for="nationality"> Nationality <span class="red">(required)</span></label>
						<input id="nationality" name="nationality" class="text " value="<?php echo $tenants_data['nationality'] ?>"required>
					</div>

                    <div class="element">
						<label> Check Tenant Status <span class="red">(Answer All Questions)</span></label>
                        <?php if($tenants_data['member_status']=="Active"){
							echo '<input type="checkbox" id="active" name="active" checked>';
							} else {
							echo '<input type="checkbox" id="active" name="active">';
                            } ?>	
                        <span> Currently active and staying? </span><br>	
                        <?php if($tenants_data['payment_status']=="Paid"){
							echo '<input type="checkbox" id="payment" name="payment" checked>';
							} else {
							echo '<input type="checkbox" id="payment" name="payment">';
                            } ?>	
                        <span> Has settled the payment of fees? </span><br>	
					</div>

					<div class="entry">
					  <button type="submit" class="add">Save </button>
					  <button type="submit" formaction="#" class="cancel">Remove Tenant </button>
					</div>
				</form>
		  </div>
            
            
	  </div>
	  