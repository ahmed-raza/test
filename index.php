<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/require.js"></script>
  <link rel="stylesheet" type="text/css" href="foxholder/src/foxholder-styles.css">
  <link rel="stylesheet" type="text/css" href="voice_input/speech-input.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'> -->
  <script type="text/javascript" src="foxholder/src/foxholder.js"></script>
  <script type="text/javascript" src="voice_input/speech-input.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }

      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        // add a zero in front of numbers<10
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function() {
          startTime()
        }, 500);
      }
      startTime();
      $('.form-container-1').foxholder({
        demo: 2 //or other number of demo (1-15) you want to use
      });
    });
  </script>
</head>
<body>
  <h1>Welcome</h1>
  <div class="form-container-1">
    <h3>Demo 1</h3>
    <p>Click on textarea or input to check</p>
    <form>
      <input id="first-input-1" type="text" placeholder="First Input" required />
      <input id="second-input-1" type="email" placeholder="Second Input" required />
      <textarea id="msg-1" placeholder="Message"></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <?php
          $string = "1&du*m my.pdf";
          $string = preg_replace('/[^a-zA-Z0-9_.]/', '_', $string);
          print $string;
        ?>
      </div>
      <div class="col-lg-6">
        <h1 id="time"></h1>
        <h2><?php print date('D, F d, Y', time()); ?></h2>
      </div>
    </div>
  </div>
</body>
