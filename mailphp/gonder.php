<title>Varauspöytä</title>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
require("class.phpmailer.php"); // PHPMailer dosyamizi çagiriyoruz
$mail = new PHPMailer(); // Sinifimizi $mail degiskenine atadik
$mail->IsSMTP(true);  // Mailimizin SMTP ile gönderilecegini belirtiyoruz
$mail->From     = $_POST["email"];//"admin@localhost"; //Gönderen kisminda yer alacak e-mail adresi
$mail->Sender   = "info@mdkebab.com";//"admin@localhost";//Gönderen Mail adresi
//$mail->ReplyTo  = ($_POST["mailiniz"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->AddReplyTo=("info@mdkebab.com");//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->FromName = $_POST["name"];//"PHP Mailer";//gönderenin ismi
$mail->Host     = "mail.mdkebab.com";//"localhost"; //SMTP server adresi
$mail->SMTPAuth = true; //SMTP server'a kullanici adi ile baglanilcagini belirtiyoruz
$mail->Port     = 587; //Natro SMPT Mail Portu
$mail->CharSet = 'UTF-8'; //Türkçe yazı karakterleri için CharSet  ayarını bu şekilde yapıyoruz.
$mail->Username = "info@mdkebab.com";//"admin@localhost"; //SMTP kullanici adi
$mail->Password = "ZNle50K1";//""; //SMTP mailinizin sifresi
$mail->WordWrap = 50;
$mail->IsHTML(true); //Mailimizin HTML formatinda hazirlanacagini bildiriyoruz.
$mail->Subject  = "Varauspöytä"; //$_POST["konu"]." /PHP SMTP Ayarları/Mail Konusu";//"Deneme Maili"; // $body  = "						"."Mail İçeriği Başlığı"."<br><br>";
$body .= "Nimi						: ".$_POST["name"]."<br>";
$body .= "Sähköposti				: ".$_POST["email"]."<br>";
$body .= "Ihmiset					: ".$_POST["people"]."<br>";
$body .= "Puhelinnumerosi&nbsp;&nbsp;: ".$_POST["phone"]."<br>";
$body .= "Päivämäärä 				: ".$_POST["date"]."-"."".$_POST["time"]."<br>";
$body .= "Viesti&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$_POST["message"]."<br>";
$textBody = $body;//"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
$mail->Body = $body;
$mail->AltBody = $text_body;


$mail->ClearAddresses();
$mail->ClearAttachments();
$mail->AddAttachment('images.png'); //mail içinde resim göndermek için
//$mail->addCC('mailadi@alanadiniz.site');// cc email adresi
//$mail->addBCC('mailadi@alanadiniz.site');// bcc email adresi
//$mail->AddAddress("ikoc4562@gmail.com"); // Mail gönderilecek adresleri ekliyoruz.
	
	if(!empty($_POST["ispost"])){

	//$mail->AddAddress($result["uname"]);
	$mail->AddAddress("fatihmeric97@gmail.com");
	$mail->AddAddress("fazel.hussaini@hotmail.fi");
	$mail->Send();
	$mail->ClearAddresses();
	$mail->ClearAttachments();

	}
		


$mail = new PHPMailer(); // Sinifimizi $mail degiskenine atadik
$mail->IsSMTP(true);  // Mailimizin SMTP ile gönderilecegini belirtiyoruz
$mail->From     = "info@mdkebab.com";//"admin@localhost"; //Gönderen kisminda yer alacak e-mail adresi
$mail->Sender   = "info@mdkebab.com";//"admin@localhost";//Gönderen Mail adresi
//$mail->ReplyTo  = ($_POST["mailiniz"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->AddReplyTo=("info@mdkebab.com");//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->FromName = "info@mdkebab.com";//"PHP Mailer";//gönderenin ismi
$mail->Host     = "mail.mdkebab.com";//"localhost"; //SMTP server adresi
$mail->SMTPAuth = true; //SMTP server'a kullanici adi ile baglanilcagini belirtiyoruz
$mail->Port     = 587; //Natro SMPT Mail Portu
$mail->CharSet = 'UTF-8'; //Türkçe yazı karakterleri için CharSet  ayarını bu şekilde yapıyoruz.
$mail->Username = "info@mdkebab.com";//"admin@localhost"; //SMTP kullanici adi
$mail->Password = "ZNle50K1";//""; //SMTP mailinizin sifresi
$mail->WordWrap = 50;
$mail->IsHTML(true); //Mailimizin HTML formatinda hazirlanacagini bildiriyoruz.
$mail->Subject  = "Varauspöytä"; //$_POST["konu"]." /PHP SMTP Ayarları/Mail Konusu";//"Deneme Maili"; // $body  = "						"."Mail İçeriği Başlığı"."<br><br>";
$body = "Viestisi on hyväksytty. Varaustiedot ovat alla. Kiitos"."<br>";
$body .= "Nimi						: ".$_POST["name"]."<br>";
$body .= "Sähköposti				: ".$_POST["email"]."<br>";
$body .= "Ihmiset					: ".$_POST["people"]."<br>";
$body .= "Puhelinnumerosi : ".$_POST["phone"]."<br>";
$body .= "Päivämäärä 				: ".$_POST["date"]."-"."".$_POST["time"]."<br>";
$body .= "Viesti&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$_POST["message"]."<br>";
$textBody = $body;//"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
$mail->Body = $body;
$mail->AltBody = $text_body;


$mail->ClearAddresses();
$mail->ClearAttachments();
$mail->AddAttachment('images.png'); //mail içinde resim göndermek için
//$mail->addCC('mailadi@alanadiniz.site');// cc email adresi
//$mail->addBCC('mailadi@alanadiniz.site');// bcc email adresi
//$mail->AddAddress("ikoc4562@gmail.com"); // Mail gönderilecek adresleri ekliyoruz.
	
	if(!empty($_POST["ispost"])){

	//$mail->AddAddress($result["uname"]);
	$mail->AddAddress($_POST["email"]);
	$mail->Send();
	$mail->ClearAddresses();
	$mail->ClearAttachments();

	}
		
		
	

?>	
