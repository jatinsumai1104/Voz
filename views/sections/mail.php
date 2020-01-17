<?php 
require_once(__DIR__.'/../../helper/init.php');
?>
<?php

if(!empty($_POST['data']))
{
    $mail = $di->get("Mail");
    $mail->addAddress("2016.jatin.sumai@ves.ac.in");
    $base = explode('data:application/pdf;filename=generated.pdf;base64,', $_POST['data'])[1];
    // var_dump($base);
    $mail->addStringAttachment($base, "name.pdf");

    $mail->isHTML(true);                              

    $mail->Subject = 'Pdf mail Hua';
    $mail->Body    = 'naach bc';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

} else echo "No Data Found";
// } 
?>
