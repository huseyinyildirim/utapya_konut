<?php
$cevap_mesaj="cevap";

$mail_mesaj=$cevap_mesaj."<br>"."selam";

$gonderen="TESK";
$mail_adres="umut@tesk.org.tr";

require_once("class.phpmailer.php"); 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.tesk.org.tr"; 
$mail->SMTPAuth = true; 
$mail->Username = "info@tesk.org.tr"; 
$mail->Password = "1";
$mail->From = "info@tesk.org.tr"; 
$mail->FromName = $gonderen; 
$mail->AddAddress($mail_adres); 
$mail->Subject = "Web Baþvurunuzun Cevabý"; 
$mail->MsgHTML($mail_mesaj); 
if(!$mail->Send()) 
{ 
echo 'Gönderim Hatasý: ' . $mail->ErrorInfo; 
exit; 
} 

?>