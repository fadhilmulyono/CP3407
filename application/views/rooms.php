<div class="h_title">Data Management - Rooms</div>
				<h2>Rooms</h2>
				<p>To check in new tenant data, click on the "Check In" button to the right. --></p>
				<a href="<?php echo base_url(); ?>Admin/check_in" style="float:right; margin-bottom:0px;"> 
                <button type="submit" class="add">Check-In</button></a>
				<p>To edit the room data and change the tenants staying in the room or check in new tenants into empty rooms, click on the Edit icon (pencil) in the Action column.</p>
				<p>To clear the room data and make way for future tenants to stay in the rooms, click on the Delete icon (no entry) in the Action column.</p>
				<p>The Master Room within the guest house is reserved only for its owner for his staycation use.</p>
				<p>To export the data in Excel spreadsheet format, click on the Export button below the table.</p>
				<div class="entry">
					<div class="sep"></div>
				</div>
               
                
				<table>
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Room Number</th>
							<th scope="col">Tenant Name</th>
							<th scope="col">Status</th>
                            <th scope="col" width="5%">Action</th>
						</tr>
					</thead>
                    <?php $no=1; ?>
                    <?php foreach($rooms as $row) { ?> 
					<tbody>
						<tr>
							<td class="align-center"><?= $no; ?></td>
							<td><?= $row["room_no"];; ?></td>
							<td><?= $row["tenant_name"];; ?></td>
                            <td><?= $row["status"];; ?></td>
                            <td>
                                <?php if($row['status']=="Occupied"){
										echo '<a href="' . base_url() . 'Admin/edit_rooms/' . $row["id"] . '" class="table-icon edit" title="Edit"></a>';
                                        echo '<a href="' . base_url() . 'Admin/clear_rooms/' . $row["id"] . '" class="table-icon delete" title="Delete"></a>';
									} else if($row['status']=="Empty"){
										echo '<a href="' . base_url() . 'Admin/edit_rooms/' . $row["id"] . '" class="table-icon edit" title="Edit"></a>';
                                    } else if($row['status']=="Reserved"){
										echo 'N/A';
                                    } ?>
							</td>
						</tr>                        
					</tbody>
                    <?php $no++ ?>
                    <?php } ?>
				</table>

				<div class="entry">
					<div class="sep"></div>		
				  	<a class="button" href="<?php echo base_url(); ?>Admin/export_rooms">Export to XLS</a>
				</div>