<?php
  function reArrayFiles(&$file_post) {

      $file_ary = array();
      $file_count = count($file_post['name']);
      $file_keys = array_keys($file_post);

      for ($i=0; $i<$file_count; $i++) {
          foreach ($file_keys as $key) {
              $file_ary[$i][$key] = $file_post[$key][$i];
          }
      }

      return $file_ary;
  }
  if (isset($_POST['submit'])) {
    if ($_FILES['media']) {
      $file_ary = reArrayFiles($_FILES['media']);

      foreach ($file_ary as $key => $file) {
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $filename = time()."_".$key."_".$file['name'];
        if (move_uploaded_file($file['tmp_name'],'uploads/'.$filename)) {
          echo "Files uploaded successfully <br />";
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Camera</title>
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form method="POST" enctype="multipart/form-data">
    <input type="file" accept="image/*" capture="camera" multiple="multiple" name="media[]">
    <input type="submit" name="submit" value="upload">
  </form>
</body>
</html>
