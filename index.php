<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/require.js"></script>
  <link rel="stylesheet" type="text/css" href="foxholder/src/foxholder-styles.css">
  <link rel="stylesheet" type="text/css" href="voice_input/speech-input.css">
  <!-- <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'> -->
  <script type="text/javascript" src="foxholder/src/foxholder.js"></script>
  <script type="text/javascript" src="voice_input/speech-input.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.form-container-1').foxholder({
        demo: 2 //or other number of demo (1-15) you want to use
      });
    });
  </script>
  <style type="text/css">
    @font-face {
      font-family: 'Orbitron';
      font-style: normal;
      font-weight: 400;
      src: local('Orbitron Regular'), local('Orbitron-Regular'), url(css/my-font.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    body {
      background: #333333;
      color: limegreen;
      text-shadow: 0 0 5px limegreen;
      font-family: 'Orbitron', sans-serif;
    }
  </style>
</head>
<body>
  <?php print_r(rand(1,9)); ?>
  <h1 class="color">Welcome</h1>
  <div class="form-container-1">
    <h3 class="text-center">Demo 1</h3>
    <p class="text-muted text-center">Click on textarea or input to check</p>
    <form>
      <input id="first-input-1" type="text" placeholder="First Input" required />
      <input id="second-input-1" type="email" placeholder="Second Input" required />
      <textarea id="msg-1" placeholder="Message"></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>
  <?php
    $string = "1&du*m my.pdf";
    $string = preg_replace('/[^a-zA-Z0-9_.]/', '_', $string);
    print $string;
  ?>
</body>
