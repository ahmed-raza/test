<?php
  function upload_files($files) {
    //
  }
  function fetch_files() {
    $dirname = "public/uploads/";
    $files = glob($dirname."*");
?>
<h4>Uploaded Files</h4>
<table id="files-table">
  <tr>
    <th>ID#</th>
    <th>File Name</th>
  </tr>
<?php
    foreach ($files as $key => $value) {
      $filename = explode("/", $value);
?>
  <tr class="<?php echo $key; ?>">
    <td><?php echo $key; ?></td>
    <td><a href="<?php echo $value; ?>" target="_blank"><?php echo $filename[2]; ?></a></td>
  </tr>
<?php
    }
  }
?>
</table>
