<?php
	include 'header.php';
	// Check if admin
	if ($current_user[0]['typetitle'] !== 'admin') {
		header("Location: index.php");
	}
?>
<div class="container">
	<div class="center">
	<h2>Add File Record</h2>
		<form method="post">
			<table class="table table-bordered">
				<tr>
					<th>Internal Receiving:</th>
					<td>
						<select class="form-control" name="internal_receiving">
							<option value="-1">Select Option</option>
							<option value="ASD">ASD</option>
							<option value="DEF">DEF</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Department:</th>
					<td>
						<select class="form-control" name="department">
							<option value="-1">Select Option</option>
							<option value="ZXC">ZXC</option>
							<option value="QWE">QWE</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Departmetn-type:</th>
					<td>
						<select class="form-control" name="department_type">
							<option value="-1">Select Option</option>
							<option value="IJK">IJK</option>
							<option value="MNO">MNO</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Organization:</th>
					<td>
						<select class="form-control" name="organization">
							<option>Select Option</option>
							<option value="QWERTY">QWERTY</option>
							<option value="LMN">LMN</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Organization-Type:</th>
					<td>
						<select class="form-control" name="organization_type">
							<option>Select Option</option>
							<option value="JKL">JKL</option>
							<option value="XYZ">XYZ</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>File No:</th>
					<td><input type="number" name="file_num" class="form-control" required></td>
				</tr>
				<tr>
					<th>Date:</th>
					<td><input type="date" name="date" class="form-control" required></td>
				</tr>
				<tr>
					<th>Subject:</th>
					<td><input type="text" name="subject" class="form-control" required></td>
				</tr>
				<tr>
					<th>File Name:</th>
					<td><input type="text" name="file_name" class="form-control" required></td>
				</tr>
				<tr>
					<th>Status:</th>
					<td>
						<select class="form-control" name="status">
							<option value="-1">Select</option>
							<option value="0">Pending</option>
							<option value="1">Approved</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="add_file" value="Submit" class="btn btn-primary long-button">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
