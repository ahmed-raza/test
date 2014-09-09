<html>
  <head>
    <title>Testing</title>
    <style type="text/css">
      #feedback{
        background-color: grey;
      }
    </style>
  </head>
  <body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <form id="help" method="post">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" id="name" placeholder="Name"></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" name="phone" id="phone" placeholder="Phone"></td>
        </tr>
        <tr>
          <td>Message</td>
          <td><textarea name="message" cols="30" id="message" placeholder="Enter message.."></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" id="submit" value="Send"></td>
        </tr>
      </table>
    </form>
    <script type="text/javascript" src="scripts/js/test.jquery.js"></script>
    <div id="feedback"></div>
  </body>
</html>
