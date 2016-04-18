<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "naineeshadr@gmail.com";
  $contactName= $_REQUEST['contactName'];
  $contactEmail = $_REQUEST['contactEmail'];
  $contactSubject = $_REQUEST['contactSubject'];
  $contactMessage = $_REQUEST['contactMessage'];
  
  //send email
  mail($admin_email, "$contactSubject", $contactMessage, "From:" . $contactEmail, $contactName);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  ?>