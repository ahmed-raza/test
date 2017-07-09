<?php require('includes/uploader.core.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload files</title>
  <link rel="stylesheet" type="text/css" href="public/css/styles.css">
  <script type="text/javascript" src="scripts/js/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/js/uploader.js"></script>
</head>
<body>
  <div id="uploader-container">
    <form action="scripts/php/upload.php" name="files-uploader" enctype="multipart/form-data" method="POST" id="file-uploader">
      <div class="inputs">
        <div><input type="file" name="files[]" id="files" multiple class="hidden"></div>
        <div class="browse-btn"><button id="browse">Browse</button></div>
        <div class="upload-btn"><input type="submit" value="Upload" id="upload"></div>
      </div>
      <div class="input-items">
        <div class="total">
          Selected Items: <span id="nums"></span>
        </div>
        <ol class="items"></ol>
      </div>
    </form>
    <div id="err"></div>
  </div>
  <?php // echo fetch_files(); ?>
</body>
</html>
