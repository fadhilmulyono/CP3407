<div class="h_title">Data Management - Tenants</div>
				<h2>Tenants</h2>
				<p>To check in new tenant data, click on the button to the right --></p>
                <a href="<?php echo base_url(); ?>Admin/check_in" style="float:right; margin-bottom:0px;"> 
                <button type="submit" class="add">Check-In</button>
                </a>
                <p>To check in new tenants into an empty room, click on the Edit icon (pencil) in the Action column.</p>
                <p>To edit the tenant data, click on the Edit icon (pencil) in the Action column.</p>
				<p>To delete the tenant data, click on the Delete icon (no entry) in the Action column.</p>
				<p>To export the data in Excel spreadsheet format, click on the Export button below the table.</p>
				<div class="entry">
					<div class="sep"></div>
				</div>
               
                
                <table>
                <thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Tenant Name</th>
							<th scope="col">Phone Number</th>
                            <th scope="col">Email Address</th>
							<th scope="col">Home Address</th>
                            <th scope="col">Nationality</th>
                            <th scope="col" width="11%">Check In Date</th>
                            <th scope="col">Member Status</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col" width="5%">Action</th>
						</tr>
					</thead>
                    <?php $no=1; ?>
                    <?php foreach($tenants as $row) { ?> 
					<tbody>
						<tr>
							<td class="align-center"><?= $no; ?></td>
							<td><?= $row["tenant_name"];; ?></td>
							<td><?= $row["phone_no"];; ?></td>
                            <td><?= $row["email"];; ?></td>
                            <td><?= $row["address"];; ?></td>
                            <td><?= $row["nationality"];; ?></td>
                            <td><?= $row["checkin_date"];; ?></td>
                            <td><?= $row["member_status"];; ?></td>
                            <td><?= $row["payment_status"];; ?></td>
                            <td>
                                <?php if($row['member_status']=="Active"){
										echo '<a href="' . base_url() . 'Admin/edit_tenants/' . $row["id"] . '" class="table-icon edit" title="Edit"></a>';
									} else if($row['member_status']=="Checking In"){
										echo '<a href="' . base_url() . 'Admin/check_in_tenants/' . $row["id"] . '" class="table-icon edit" title="Check In"></a>';
									} ?>
                                <a onClick="javascript: return confirm('Are you sure you want to delete this tenant data? This can`t be undone!');" 
                                href="<?php echo base_url(); ?>Admin/delete_tenants/<?php echo $row["id"] ?>" class="table-icon delete" title="Delete"></a>
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