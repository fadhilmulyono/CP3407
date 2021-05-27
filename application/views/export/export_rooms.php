<?php
$file = "myfile.xlsx";
header('Content-disposition: attachment; filename='.$file);
header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Length: ' . filesize($file));
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
header('Pragma: public');
ob_clean();
flush(); 
readfile($file);
?>
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