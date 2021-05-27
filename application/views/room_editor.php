        <div id="main">
        
        
		  <div class="clear"></div>
          
            
            <div class="full_w" id="form_geje">
			  <div class="h_title">Edit Room Data </div>
				<form action="<?php echo base_url(); ?>Admin/update_rooms/<?php echo $rooms_data["id"]; ?>" method="post" enctype="multipart/form-data">
                    <div class="element">
                        <input type="hidden" name="id" value="<?php echo $rooms_data['id'] ?>">
						<label for="room_no"> Room Number </label>
						<input id="room_no" name="room_no" class="text " value="<?php echo $rooms_data['room_no'] ?>" disabled>
					</div>
                    
                    <div class="element">
						<label for="tenant_name"> Tenant Name <span class="red">(leave it blank if the room is empty)</span></label>
						<input id="tenant_name" name="tenant_name" class="text " value="<?php echo $rooms_data['tenant_name'] ?>">
					</div>

					<div class="entry">
					  <button type="submit" class="add">Save </button> <button href="<?php echo base_url(); ?>Admin/rooms" class="cancel">Cancel</button>
					</div>
				</form>
		    </div>
            
            
	    </div>
	  