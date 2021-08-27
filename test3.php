
<?php
    require_once 'class.phpmailer.php';    //dodanie klasy phpmailer
    require_once 'class.smtp.php';    //dodanie klasy smtp
    $mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
	//$mail->SMTPDebug = 1; 
	$mail->isSMTP();  
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
	$mail->Host = "glitchez.nazwa.pl";    //adres serwera SMTP wysyłającego e-mail
	
    $mail->setFrom("glitchez@glitchez.nazwa.pl", "Ralz");    //adres e-mail użyty do wysyłania wiadomości
	$mail->AddReplyTo('glitchez@glitchez.nazwa.pl', 'Ralz'); //adres e-mail nadawcy oraz jego nazwa

    $mail->Username = "glitchez@glitchez.nazwa.pl";    //nazwa użytkownika do skrzynki e-mail
    $mail->Password = "gmXcspnWe7UzpL6rMlN6";    //hasło użytkownika do skrzynki e-mail
    $mail->Port = 465; //port serwera SMTP zależny od konfiguracji dostawcy usługi poczty
    $mail->Subject = "mail testowy";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
    $mail->Body = 'dfgh ggjf';    //Treść wiadomości, można stosować zmienne i znaczniki HTML     
   
   for($i=0;$i<5;$i++)
   {
    $mail->AddAddress ("anna246v@stud.kea.dk","Ralz".$i."kkkkk");    //adres skrzynki e-mail oraz nazwa
                                                                                                   //adresata, do którego trafi wiadomość
     if($mail->Send())    //sprawdzenie wysłania, jeśli wiadomość została pomyślnie wysłana
        {                      
        echo 'E-mail został wysłany'; //wyświetl ten komunikat
        }            
    else    //w przeciwnym wypadku
        {           
        echo 'E-mail nie mógł zostać wysłany';    //wyświetl następujący
        }

    }
  ?>  




 <?php


// the message
//$sTempPassword = uniquid();
//$msg = "Your new passowrd is " .$tempPassword .". It is recommended that you change your password after successful log in.";

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
//mail("annran.box@gmail.com","pass recovery",$msg);

//echo "mail sent";
?>
  