<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script type="text/javascript" src="jquery-ui-1.12.1/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('tbody').sortable({
        cursor: "move"
      });
      $('tbody').disableSelection();
    });
  </script>
</head>
<body>
  <table border="1" id="sortable">
    <tbody>
      <?php for($i=1;$i<=10;$i++): ?>
        <tr>
          <td><input type="" value="<?php echo $i; ?>">Hello: <?php echo $i; ?></td>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</body>
</html>
