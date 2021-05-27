<div id="main">
        
        
        <div class="clear"></div>
        
          
          <div class="full_w" id="form_geje">
            <div class="h_title">Check In Tenant </div>
              <form action="<?php echo base_url(); ?>Admin/check_in_rooms/<?php echo $tenants_data["id"]; ?>" method="post" enctype="multipart/form-data">

                  <div class="element">
                      <label for="tenant_name"> Tenant Name </label>
                      <input id="tenant_name" name="tenant_name" class="text " value="<?php echo $tenants_data['tenant_name'] ?>" disabled>
                  </div>
                
                  <div class="element">
						<label for="room_no"> Room Number <span class="red">(required)</span></label>
						<select id="room_no" name="room_no">
							<?php foreach ($room_number as $data) { ?>
								<option value="<?= $data["room_no"]; ?>"><?= $data["room_no"]; ?></option>
							<?php } ?>
						</select>
				  </div>

                  <div class="entry">
                    <button type="submit" class="add">Save </button> <button href="<?php echo base_url(); ?>Admin/rooms" class="cancel">Cancel</button>
                  </div>
              </form>
          </div>
          
          
      </div>
    