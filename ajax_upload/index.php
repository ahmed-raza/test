<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ajax Upload</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/js/upload.js"></script>
</head>
<body>
  <fieldset>
    <legend>Upload Form</legend>
    <div class="group-left">
      <form id="form-upload" method="POST" enctype="multipart/form-data">
        <div class="file-wrapper">
          <input type="file" id="file" name="file[]" multiple="true" onchange="selectedFiles();">
          <label for="file" id="label"><strong>Choose a file</strong></label>
        </div>
        <div class="file-submit">
          <input type="submit" value="Upload" class="btn">
        </div>
      </form>
    </div>
    <div class="group-right">
      <div class="files-selected">
        <strong>Selected files</strong>
        <ol id="selected"></ol>
      </div>
    </div>
  </fieldset>
</body>
</html>
