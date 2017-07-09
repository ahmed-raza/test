<?php
  $search = '';
  if ($_GET) {
    $search = $_GET['search'];
  }
  $json = file_get_contents("http://local.lease.com/leaseref/autocomplete?q=".$search);
  $results = json_decode($json);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script>
    setInterval(function(){
      var day = {
        '0':'Sunday',
        '1':'Monday',
        '2':'Tuesday',
        '3':'Wednesday',
        '4':'Thursday',
        '5':'Friday',
        '6':'Saturday',
      };
      var month = {
        '0':'January',
        '1':'February',
        '2':'March',
        '3':'April',
        '4':'May',
        '5':'June',
        '6':'July',
        '7':'August',
        '8':'September',
        '9':'October',
        '10':'November',
        '11':'December',
      };
      var t = new Date();
      var seconds = t.getSeconds();
      seconds = seconds < 10 ? "0"+seconds : seconds;
      minutes = t.getMinutes();
      minutes = minutes < 10 ? "0"+minutes : minutes;
      hours = t.getHours();
      hours = hours % 12;
      hours = hours < 10 ? "0"+hours : hours;
      var date = day[t.getDay()] + ' ' + t.getDate() + ' ' + month[t.getMonth()] + ', ' + t.getFullYear();
      var time = hours + ' : ' + minutes + ' : ' + seconds;
      document.getElementById("js-time").innerHTML = date + ' | ' + time;
    }, 1000);
    $(document).ready(function(){
      var timer;
      $('#search').keyup(function(){
        var $input = $(this);
        clearTimeout(timer);
        timer = setTimeout(function(){
          console.log($input.val());
          if ($input.val() != "") {
            $.getJSON("http://local.lease.com/leaseref/autocomplete?q="+$input.val(), function( data ) {
              $('#results ul').remove();
              var items = [];
              $.each( data, function( key, val ) {
                items.push( "<li id='" + key + "'><a href='"+val.path+"'>" + val.title + "</a></li>" );
                console.log(val);
              });
             
              $( "<ul/>", {
                "class": "results-list",
                html: items.join( "" )
              }).appendTo( "#results" );
            });
          }else{
            $('#results ul').remove();
          }
        }, 1000);
      });
    });
  </script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <form method="get">
          <div class="form-group">
            <label for="search">Search</label>
            <input type="text" name="search" id="search" autocomplete="off" class="form-control" value="<?php echo $search; ?>">
            <div id="results"></div>
          </div>
          <input type="submit" value="Search" class="btn btn-success">
          <a href="/" class="btn btn-primary">Reset</a>
        </form>
        &nbsp;
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID#</th>
              <th>Nodes</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($results as $key => $value): ?>
              <tr>
                <td><?php echo $key; ?></td>
                <td><a href="<?php echo $value->path; ?>" target="_blank"><?php echo $value->title; ?></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="col-lg-4">
        <div class="well">
          <?php
            date_default_timezone_set("America/Toronto");
            $time = date('h', time() - 7200);
            $time = strtotime($time);
            print_r(humanTiming(1487991059) . "<br>");
            echo "current_time :";
            print_r(time() - (60 * 60));
            echo "<br>";
            function humanTiming($time) {
              $time = time() - $time; // to get the time since that moment
              $time = ($time<1)? 1 : $time;
              $tokens = array (
                31536000 => 'year',
                2592000 => 'month',
                604800 => 'week',
                86400 => 'day',
                3600 => 'hour',
                60 => 'minute',
                1 => 'second'
                );
              foreach ($tokens as $unit => $text) {
                if ($time < $unit) continue;
                $numberOfUnits = floor($time / $unit);
                return $numberOfUnits.''.$text.(($numberOfUnits>1)?'s':'');
              }
            }
          ?>
          <span id="js-time"></span>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
