<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer/src/Exception.php';
require 'assets/PHPMailer/src/PHPMailer.php';
require 'assets/PHPMailer/src/SMTP.php';

$nama=$_POST['nama'];
$email=$_POST['email'];
$catatan=$_POST['catatan'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gustianyusupprayoga@gmail.com';                     //SMTP username
    $mail->Password   = 'erbf dwlq ocsi pcrl';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('gustianyusupprayoga@gmail.com', 'catatan');
    $mail->addAddress('gustianyusupprayoga@gmail.com', 'Gfood');     //Add a recipient
    


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Catatan dari Gfood'.$nama;
    $mail->Body    = $nama.'<br>'.$email.'<br>'.$catatan;
   

    $mail->send();
   header("Location:gfood.php?alert=Pesan Terkirim");
} catch (Exception $e) {
    header("Location:gfood.php?alert=Pesan Gagal");
}
?>