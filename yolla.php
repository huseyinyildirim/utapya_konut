<?php   
function bharf( $giris ) {   
 return strtoupper( strtr($giris,'ðüþýiöç', 'ÐÜÞIÝÖÇ') );   
}

$ad=bharf($_POST['isim']);
$tel=$_POST['telefon'];
$mail=$_POST['email'];
$mesaj=$_POST['mesaj'];
$tarih=date('Y-m-d H:i');
$ip=$_SERVER['REMOTE_ADDR'];


$mail_mesaj=$tarih." tarihinde ".$ad." size þu mesajý gönderdi. ( ".$mesaj." ) Tel: ".$tel." Mail: ".$mail." IP: ".$ip;
$gonderen="Ankara Ankara Sitesi";
$gidecek_mail="info@3asguvenlik.com.tr";

require_once("class.phpmailer.php"); 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.ankaraankarasitesi.org"; 
$mail->SMTPAuth = true; 
$mail->Username = "info@ankaraankarasitesi.org"; 
$mail->Password = "Ankr3810";
$mail->From = "info@ankaraankarasitesi.org"; 
$mail->FromName = $gonderen; 
$mail->AddAddress($gidecek_mail); 
$mail->Subject = "Web Mesajý"; 
$mail->Body = $mail_mesaj; 
if(!$mail->Send()) 
{ 
echo 'Gönderim Hatasý: ' . $mail->ErrorInfo; 
exit; 
}

$gidecek_mail="info@ankaraankarasitesi.org";

require_once("class.phpmailer.php"); 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.ankaraankarasitesi.org"; 
$mail->SMTPAuth = true; 
$mail->Username = "info@ankaraankarasitesi.org"; 
$mail->Password = "Ankr3810";
$mail->From = "info@ankaraankarasitesi.org"; 
$mail->FromName = $gonderen; 
$mail->AddAddress($gidecek_mail); 
$mail->Subject = "Web Mesajý"; 
$mail->Body = $mail_mesaj; 
if(!$mail->Send()) 
{ 
echo 'Gönderim Hatasý: ' . $mail->ErrorInfo; 
exit; 
} 

$gidecek_mail="birol@ankaraankarasitesi.org";

require_once("class.phpmailer.php"); 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.ankaraankarasitesi.org"; 
$mail->SMTPAuth = true; 
$mail->Username = "info@ankaraankarasitesi.org"; 
$mail->Password = "Ankr3810";
$mail->From = "info@ankaraankarasitesi.org"; 
$mail->FromName = $gonderen; 
$mail->AddAddress($gidecek_mail); 
$mail->Subject = "Web Mesajý"; 
$mail->Body = $mail_mesaj; 
if(!$mail->Send()) 
{ 
echo 'Gönderim Hatasý: ' . $mail->ErrorInfo; 
exit; 
} 

$gidecek_mail="bulent@ankaraankarasitesi.org";

require_once("class.phpmailer.php"); 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.ankaraankarasitesi.org"; 
$mail->SMTPAuth = true; 
$mail->Username = "info@ankaraankarasitesi.org"; 
$mail->Password = "Ankr3810";
$mail->From = "info@ankaraankarasitesi.org"; 
$mail->FromName = $gonderen; 
$mail->AddAddress($gidecek_mail); 
$mail->Subject = "Web Mesajý"; 
$mail->Body = $mail_mesaj; 
if(!$mail->Send()) 
{ 
echo 'Gönderim Hatasý: ' . $mail->ErrorInfo; 
exit; 
} 
 
Header("Location: basari.php");
exit;


?>