<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <ol>
    <?php
      $nodes = file_get_contents("http://local.drupal.com/example_api?user=admin&key=123abc");
      $nodes = json_decode($nodes);
      foreach ($nodes as $node) { ?>
      <li><?php echo $node->title; ?></li>
    <?php } ?>
  </ol>
</body>
</html>
