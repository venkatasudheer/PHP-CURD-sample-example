<?php
SESSION_START();
include ('config.php');

require 'C:\xampp\sudheer\vendor\autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'C:\xampp\PHPMailer-master\src\Exception.php';
  require 'C:\xampp\PHPMailer-master\src\PHPMailer.php';
  require 'C:\xampp\PHPMailer-master\src\SMTP.php';
  
if (isset ($_POST['submit'])) {

	$email= $_POST['email'];
$token=rand();
	  $q = 'SELECT Email_id FROM users WHERE Email_id=:email';
      $query = $db->prepare($q);
      $query->execute(array(':email'=> $email));
       $row = $query->fetch(PDO::FETCH_ASSOC);
	$q = "UPDATE users SET token='".$token."' WHERE Email_id='$email'";
    $db->query($q); 
	if ($email==$row['Email_id'])
        {
$mail = new PHPMailer(true);
  $mail->IsSMTP(); 
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.live.com"; // outlook SMTP SERVER if you want for the gmail SMTP go for smtp.gmail.com
  $mail->Username   = <YOUR DOMAIN MAIL ID>;
  $mail->Password   = <YOUR PASSWORD>;
  $mail->IsHTML(true);
  $mail->AddAddress($_POST['email']);
  $mail->SetFrom(<YOUR DOMAIN MAIL ID>, <SET NAME>);
  $mail->AddReplyTo(<YOUR DOMAIN MAIL ID>,<SET NAME>);
  $mail->Subject = "Venkata sudheer PHP CURD Example";
  $content = "To reset your  password click here http://sudheer.com/resset.php?key=".$token."";
  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
  } else {
    echo "Email sent successfully";
    require('index.php');
  }
}	
else
{
	echo "Please enter valid mail id";
}
}
?>
