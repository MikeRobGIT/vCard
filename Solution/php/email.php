<?php

  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  // here we use the php mail function
  // to send an email to:
  // you@yourdomain.com
  mail( "michaelrobateau@gmail.com", "Feedback Form Results",$message, $email );
?>
