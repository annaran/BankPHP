
<?php
    require_once 'class.phpmailer.php';    //dodanie klasy phpmailer
    require_once 'class.smtp.php';    //dodanie klasy smtp
    $mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
    $mail->From = "glitchez@glitchez.nazwa.pl";    //adres e-mail użyty do wysyłania wiadomości
    $mail->FromName = "Jan Nowak";    //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
    $mail->AddReplyTo('glitchez.nazwa.pl', 'mailing'); //adres e-mail nadawcy oraz jego nazwa
                                                 //w polu "Odpowiedz do"  
    $mail->Host = "smtp.nazwa.pl";    //adres serwera SMTP wysyłającego e-mail
    $mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
    $mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
    $mail->Username = "glitchez@glitchez.nazwa.pl";    //nazwa użytkownika do skrzynki e-mail
    $mail->Password = "gmXcspnWe7UzpL6rMlN6";    //hasło użytkownika do skrzynki e-mail
    $mail->Port = 465; //port serwera SMTP zależny od konfiguracji dostawcy usługi poczty
    $mail->Subject = "mail testowy";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
    $mail->Body = 'treść';    //Treść wiadomości, można stosować zmienne i znaczniki HTML     
    $mail->AddAddress ("anna246v@stud.kea.dk","Anna");    //adres skrzynki e-mail oraz nazwa
                                                    //adresata, do którego trafi wiadomość
     if($mail->Send())    //sprawdzenie wysłania, jeśli wiadomość została pomyślnie wysłana
        {                      
        echo 'E-mail został wysłany'; //wyświetl ten komunikat
        }            
    else    //w przeciwnym wypadku
        {           
        echo 'E-mail nie mógł zostać wysłany';    //wyświetl następujący
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
  