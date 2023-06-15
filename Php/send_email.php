


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $name = $_POST['Name'];
   $email = $_POST['Email'];
   $message = $_POST['Massage'];

   // Send email code goes here
   // Use PHP's built-in mail() function or a library like PHPMailer to send the email
   // Remember to set the recipient email address, subject, and body of the email

   // Example using mail() function
   $to = 'mohamedhosny2819@gmail.com'; // Replace with your email address
   $subject = 'New Appointment Request';
   $body = "Name: $name\nEmail: $email\nMessage: $message";
   $headers = 'From: ' . $email . "\r\n" .
      'Reply-To: ' . $email . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

   $mailSent = mail($to, $subject, $body, $headers);

   if ($mailSent) {
      echo 'Email sent successfully.';
   } else {
      echo 'Failed to send email.';
   }
}
?>
