
 <?php


// the message
$sTempPassword = uniqid();
$msg = "Your new passowrd is " .$sTempPassword .". It is recommended that you change your password after successful log in.";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("annran.box@gmail.com","pass recovery",$msg);

echo "mail sent";
?>
  