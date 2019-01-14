
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                    <th>Customer Id</th>
										<th>Name</th>
										<th>Address</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($customer as $customers): ?>
									<tr>
										<td width="150">
											<?php echo $customers->customer_id ?>
										</td>
										<td>
											<?php echo $customers->nama ?>
										</td>
                    >
										<td>
											<?php echo $customers->address ?>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
