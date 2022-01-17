<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'tristan.cotte@outlook.fr';


  if(isset($_POST['submit'])){
    $to = $receiving_email_address; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $name ." wrote about the subject : ". $subject ."\nContent :" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you ";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
  }

//  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//    include( $php_email_form );
//  } else {
//    die( 'Unable to load the "PHP Email Form" Library!');
//  }
//
//  $contact = new PHP_Email_Form;
//  $contact->ajax = true;
//
//  $contact->to = $receiving_email_address;
//  $contact->from_name = $_POST['name'];
//  $contact->from_email = $_POST['email'];
//  $contact->subject = $_POST['subject'];
//
//  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
//  /*
//  $contact->smtp = array(
//    'host' => 'example.com',
//    'username' => 'example',
//    'password' => 'pass',
//    'port' => '587'
//  );
//  */
//
//  $contact->add_message( $_POST['name'], 'From');
//  $contact->add_message( $_POST['email'], 'Email');
//  $contact->add_message( $_POST['message'], 'Message', 10);
//
//  echo $contact->send();
?>
