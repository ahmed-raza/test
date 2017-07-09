<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      function load() {
        var what = 'short_description';
        $.ajax({
          dataType: "json",
          url: "return.php",
          success: function(data){
            $('#data').append('<li>'+data.short_description+'</li>');
            setTimeout(function(){load();}, 5000);
          },
          error: function(){
            $('#data').append('<li>Errur occured</li>');
          }
        });
      }
      load();
    });
  </script>
</head>
<body>
  <h1>Welcome</h1>
  <a href="javascript:void(0)" onclick="load();">Click</a>
  <ol id="data"></ol>
</body>
</html>
