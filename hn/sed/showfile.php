<?php
	include 'header.php';
	$files = File::fetch_all();
	// print_r();
?>
<div class="container">
	<table class="table">
		<tr>
			<th>SR</th>
			<th>Internal Receiving</th>
			<th>Date</th>
			<th>Department</th>
			<th>D Type</th>
			<th>Organization</th>
			<th>Organization Type</th>
			<th>File Num</th>
			<th>Subject</th>
			<th>File Name</th>
			<th>Status</th>
			<?php if($current_user[0]['typetitle'] == 'admin'): ?>
			<th>Actions</th>
			<?php endif; ?>
		</tr>
		<?php foreach ($files as $file) { ?>
			<tr>
				<td><?php echo $file['file_id']; ?></td>
				<td><?php echo $file['internal_receiving']; ?></td>
				<td><?php echo $file['dat']; ?></td>
				<td><?php echo $file['department']; ?></td>
				<td><?php echo $file['department_type']; ?></td>
				<td><?php echo $file['organization']; ?></td>
				<td><?php echo $file['organization_type']; ?></td>
				<td><?php echo $file['file_num']; ?></td>
				<td><?php echo $file['subject']; ?></td>
				<td><?php echo $file['file_name']; ?></td>
				<td><?php if($file['status']){echo 'Approved';}else{ echo 'Pending';} ?></td>
				<?php if($current_user[0]['typetitle'] == 'admin'): ?>
					<td><a href="editfile.php?file_id=<?php echo $file['file_id']; ?>">Edit</a> <a href="deletefile.php?file_id=<?php echo $file['file_id']; ?>">Delete</a></td>
			<?php endif; ?>
			</tr>
		<?php } ?>
	</table>
</div>
