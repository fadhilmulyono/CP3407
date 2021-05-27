<div class="h_title">Admin Dashboard</div>
				<p>The dashboard displays the summary of the data stored within our database. 
                If you want to manipulate the data, please go to the individual data management pages.</p>
                <div class="entry">
					<div class="sep"></div>
				</div>
                <h2>Rooms</h2>
				<table>
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Room Number</th>
							<th scope="col">Tenant Name</th>
							<th scope="col">Status</th>
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
						</tr>                        
					</tbody>
                    <?php $no++ ?>
                    <?php } ?>
				</table>
				<div class="entry">
					<div class="sep"></div>		
				</div>
                <h2>Bookings</h2>
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
                            <td><?= $row["status"];; ?></td>
						</tr>                        
					</tbody>
                    <?php $no++ ?>
                    <?php } ?>
				</table>
				<div class="entry">
					<div class="sep"></div>		
				</div>
                <h2>Tenants</h2>
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
						</tr>                        
					</tbody>
                    <?php $no++ ?>
                    <?php } ?>
				</table>