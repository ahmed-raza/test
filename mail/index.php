<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mail</title>
</head>
<body>
  <fieldset>
    <legend>Contact Us</legend>
    <table>
      <form action="contact-send.php" method="post">
        <tr>
          <td><input type="text" name="name" placeholder="Your name"></td>
        </tr>
        <tr>
          <td><input type="email" name="email" placeholder="Your email"></td>
        </tr>
        <tr>
          <td><input type="text" name="subject" placeholder="Subject"></td>
        </tr>
        <tr>
          <td><textarea name="message" id="message" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </form>
    </table>
  </fieldset>
</body>
</html>
