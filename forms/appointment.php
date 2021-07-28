<?php
/*
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  

  // Replace contact@example.com with your real receiving email address
</*
  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  $contact->from_name = $_POST['name'];
 

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'Name');
  $contact->add_message( $_POST['phone'], 'Phone');

  echo $contact->send();
?>*/

$conn = new mysqli("localhost", "root", "", "Groupbima");
                    if ($conn-> connect_error){
                      die("connection failed:" .$conn-> connect_error);
                    }
 ?>
 
 <?php
 if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $phone=$_POST['phone'];
  $reg = $conn->prepare("INSERT INTO appointment(name,phone) VALUES (?,?)");
  $reg->bind_param("ss", $name, $phone);
  $reg->execute();
  echo '<script language="javascript">';
  echo 'alert("Sorry !!!! Mobile Number Already Registred")';
  echo '</script>';
  header("Refresh:.001 url=index.php");

 

 }
  ?>