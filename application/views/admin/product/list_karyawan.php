

									<?php foreach ($karyawan as $kar): ?>
									<tr>
										<td width="150">
											<?php echo $kar->karyawan_id ?>
										</td>
										<td>
											<?php echo $kar->nama ?>
										</td>
										<td>
											<?php echo $kar->alamat ?>
										</td>
										<td>
											<?php echo $kar->telpon ?>
										</td>
									</tr>
									<?php endforeach; ?>
