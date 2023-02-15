<?php

// Define the recipient email address
$to = 'youremail@example.com';

// If the form was submitted
if (isset($_POST['submit'])) {

  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $website = $_POST['website'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Define the email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  // Construct the email message
  $body = "<p><strong>Name:</strong> $name</p>";
  $body .= "<p><strong>Email:</strong> $email</p>";
  $body .= "<p><strong>Phone:</strong> $phone</p>";
  $body .= "<p><strong>Address:</strong> $address</p>";
  $body .= "<p><strong>Website:</strong> $website</p>";
  $body .= "<p><strong>Subject:</strong> $subject</p>";
  $body .= "<p><strong>Message:</strong> $message</p>";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo '<p>Your message was sent successfully!</p>';
  } else {
    echo '<p>There was an error sending your message. Please try again later.</p>';
  }

}

?>
