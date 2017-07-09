<?php
  include 'header.php';
  // Check if admin
  if ($current_user[0]['typetitle'] !== 'admin') {
    header("Location: index.php");
  }
  $file = File::get_file_by_id($_GET['file_id']);
?>
<div class="container">
  <div class="center">
  <h2>Edit File Record</h2>
    <form method="post">
    <input type="hidden" name="file_id" value="<?php echo $file['file_id']; ?>">
      <table class="table table-bordered">
        <tr>
          <th>Internal Receiving:</th>
          <td>
            <select class="form-control" name="internal_receiving">
              <option value="-1">Select Option</option>
              <option value="ASD" <?php if($file['internal_receiving'] == 'ASD'){echo "selected";} ?>>ASD</option>
              <option value="DEF" <?php if($file['internal_receiving'] == 'DEF'){echo "selected";} ?>>DEF</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Department:</th>
          <td>
            <select class="form-control" name="department">
              <option value="-1">Select Option</option>
              <option value="ZXC" <?php if($file['department'] == 'ZXC'){echo "selected";} ?>>ZXC</option>
              <option value="QWE" <?php if($file['department'] == 'QWE'){echo "selected";} ?>>QWE</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Departmetn-type:</th>
          <td>
            <select class="form-control" name="department_type">
              <option value="-1">Select Option</option>
              <option value="IJK" <?php if($file['department_type'] == 'IJK'){echo "selected";} ?>>IJK</option>
              <option value="MNO" <?php if($file['department_type'] == 'MNO'){echo "selected";} ?>>MNO</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Organization:</th>
          <td>
            <select class="form-control" name="organization">
              <option>Select Option</option>
              <option value="QWERTY" <?php if($file['organization'] == 'QWERTY'){echo "selected";} ?>>QWERTY</option>
              <option value="LMN" <?php if($file['organization'] == 'LMN'){echo "selected";} ?>>LMN</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Organization-Type:</th>
          <td>
            <select class="form-control" name="organization_type">
              <option>Select Option</option>
              <option value="JKL" <?php if($file['organization_type'] == 'JKL'){echo "selected";} ?>>JKL</option>
              <option value="XYZ" <?php if($file['organization_type'] == 'XYZ'){echo "selected";} ?>>XYZ</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>File No:</th>
          <td><input type="number" name="file_num" class="form-control" required value="<?php echo $file['file_num']; ?>"></td>
        </tr>
        <tr>
          <th>Date:</th>
          <td><input type="date" name="date" class="form-control" required value="<?php echo $file['dat']; ?>"></td>
        </tr>
        <tr>
          <th>Subject:</th>
          <td><input type="text" name="subject" class="form-control" required value="<?php echo $file['subject']; ?>"></td>
        </tr>
        <tr>
          <th>File Name:</th>
          <td><input type="text" name="file_name" class="form-control" required value="<?php echo $file['file_name']; ?>"></td>
        </tr>
        <tr>
          <th>Status:</th>
          <td>
            <select class="form-control" name="status">
              <option value="-1">Select</option>
              <option value="0" <?php if($file['status'] == 0){echo "selected";} ?>>Pending</option>
              <option value="1" <?php if($file['status'] == 1){echo "selected";} ?>>Approved</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="edit_file" value="Submit" class="btn btn-primary long-button">
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
