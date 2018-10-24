<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="mailer.php" method="post">
      <input type="email" name="EMail" placeholder="Enter Email">
      <input type="submit" name="submit" value="send">
    </form>
  </body>
</html>
<?php

mailId = $POST['EMail'];

$to = mailId;
$subject = 'Hello.';
$message = 'Thanks for testing';
$header = 'From: Namra Ansari <sender@namraansari6797@gmail.com>\r\n';
$header.= 'Reply-To: replyto@namraansari6797@gmail.com\r\n';
$header.="Content-type: text/html\r\n";

mail($to, $subject, $message, $header);

 ?>
