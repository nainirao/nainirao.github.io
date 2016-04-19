<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['contactForm']))  {
  
  //Email information
  $admin_email = "naineeshadr@gmail.com";
  $contactName= $_REQUEST['contactName'];
  $contactEmail = $_REQUEST['contactEmail'];
 
  $contactMessage = $_REQUEST['contactMessage'];
  
  //send email
  mail($admin_email, $contactMessage, "From:" . $contactEmail, $contactName);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  ?>