
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                    <th>Customer Id</th>
										<th>Name</th>
										<th>Address</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($supplier as $suppliers): ?>
									<tr>
										<td width="150">
											<?php echo $suppliers->supplier_id ?>
										</td>
										<td>
											<?php echo $suppliers->supplier_name ?>
										</td>
                    >
										<td>
											<?php echo $suppliers->supplier_address ?>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
