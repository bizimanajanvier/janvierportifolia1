<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'bizimanajnvr@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $name->from_name = $_POST['name'];
  $email->from_email = $_POST['email'];
  $subject->subject = $_POST['subject'];
  

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

 //$conn=mysqli_connect("localhost","root","StageNode1!","personal")

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  if(isset($_POST['phone'])) {
    $contact->add_message( $_POST['phone'], 'Phone');
    $db="INSERT INTO personal()VALUES('')"
  }
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>


