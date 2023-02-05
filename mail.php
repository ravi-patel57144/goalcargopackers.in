<?php
if(isset($_POST['submit'])){
  $to = "info@goalcargopackers.in";
  $subject = "Inquiry for Shifting from Goal.in";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['Phone'];
  $date = $_POST['date'];
  $from = $_POST['from'];
  $to = $_POST['to'];
  $message = $_POST['message'];

  $message = "Name: " . $name . "\n" .
             "Email: " . $email . "\n" .
             "Phone: " . $phone . "\n" .
             "Date: " . $date . "\n" .
             "From: " . $from . "\n" .
             "To: " . $to . "\n" .
             "Message: " . $message;

  $headers = "From: $email" . "\r\n";

  if(mail($to, $subject, $message, $headers)){
    echo "Message sent successfully";
  } else{
    echo "Message sending failed";
  }
}
?>
