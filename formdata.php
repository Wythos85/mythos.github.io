<?php
  $site = htmlspecialchars($_GET["site"]);
  $image = htmlspecialchars($_GET["image"]);
  $error = "";
  if(empty($site)  ||
    empty($image))
  {
    $error .= "\n Error: no field must be left blank.";
  }
  if(empty($error))
  {
    $email = "qcdynamics02@gmail.com";
    $to = "midnight.myths1985@gmail.com";
    $subject = "New Email for Hometown!";
    $headers = "From: $email\n";
    $message = "New possible member!!\n
    Website URL: $site\n
    Image URL: $image";
    mail($to,$subject,$message,$headers);
    header('Location: contact-form-thanks.html');
  }
?>
