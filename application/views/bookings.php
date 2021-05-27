<div class="h_title">Data Management - Bookings</div>
				<h2>Bookings</h2>
				<p>To add new booking data to the table, click on the button to the right --></p>
                <a href="<?php echo base_url(); ?>Admin/add_bookings" style="float:right; margin-bottom:0px;"> 
                <button type="submit" class="add">Add Booking Data</button></a>
				<p>To edit booking data and assess the application outcome, click on the Edit icon (pencil) in the Action column.</p>
				<p>To send an email to the booking applicant, click on the Send Email icon (archive) in the Action column.</p>
				<p>To delete accepted or rejected booking applications, click on the Delete icon (no entry) in the Action column.</p>
				<p>To export the data in Excel spreadsheet format, click on the Export button below the table.</p>

				<div class="entry">
					<div class="sep"></div>
				</div>
               
                
                <table>
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Booking Name</th>
							<th scope="col">Phone Number</th>
							<th scope="col">Email Address</th>
                            <th scope="col">Check-In Date</th>
                            <th scope="col">Stay Duration</th>
                            <th scope="col">Status</th>
                            <th scope="col" width="5%">Action</th>
						</tr>
					</thead>
                    <?php $no=1; ?>
                    <?php foreach($bookings as $row) { ?> 
					<tbody>
						<tr>
							<td class="align-center"><?= $no; ?></td>
							<td><?= $row["booking_name"];; ?></td>
							<td><?= $row["phone_no"];; ?></td>
                            <td><?= $row["email"];; ?></td>
                            <td><?= $row["checkin_date"];; ?></td>
                            <td><?= $row["stay_duration"];; ?> months</td>
                            <td><?php if($row['status']=="Received"){
                                echo '';
							} else {
								echo $row["status"];
							} ?>
							</td>
                            <td>
								<?php if($row['status']=="Received"){
									echo '<a href="' . base_url() . 'Admin/edit_bookings/' . $row["id"] . '" class="table-icon edit" title="Edit"></a>';
								} else {
									echo '<a href="' . base_url() . 'Admin/delete_bookings/' . $row["id"] . '" class="table-icon delete" title="Delete"></a>';
                                }?>
								<a href="mailto:<?= $row["email"] ?>" class="table-icon archive" title="Send Email">
                            </td>
						</tr>                        
					</tbody>
                    <?php $no++ ?>
                    <?php } ?>
				</table>

				<div class="entry">
					<div class="sep"></div>		
				  	<a class="button" href="">Export to XLS</a>
				</div>