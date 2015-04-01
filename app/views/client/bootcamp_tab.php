<?php //Initialize models needed for the table
$bootcamp = new Bootcamp_model($serial_number);
?>

	<h2>Boot Camp</h2>

		<table class="table table-striped">
			<tbody>
				<tr>
					<td>Status</td>
					<td><?php echo $bootcamp->bootcamp_status; ?></td>
				</tr>
			</tbody>
		</table>