<?php
/*
============= (*) INDOSEC FRAMEWORK (*)===============
  
   Gausah Recode Deh :) Hargai Authornya Yak 
============= (*) INDOSEC FRAMEWORK (*)===============
*/
echo "
                  _    _____ _               _    
                 | |  / ____| |             | |   
 _ __   ___  _ __| |_| |    | |__   ___  ___| | __
| '_ \ / _ \| '__| __| |    | '_ \ / _ \/ __| |/ /
| |_) | (_) | |  | |_| |____| | | |  __/ (__|   < 
| .__/ \___/|_|   \__|\_____|_| |_|\___|\___|_|\_\
| |                                               
|_|
\n
====================================\n
    => Url & Port Checher <=
    Author : 4ri Farhan
    Team : IndoSec Coder Team
Github : https://github.com/arifarhan16\n
====================================\n\n";
echo "[+] Url (Ex. indosecid.blogspot.com): "; $url= trim(fgets(STDIN));
echo "[+] Port (Harus Angka): "; $Port= trim(fgets(STDIN));
$datas = 'remoteAddress='.$url.'&portNumber='.$Port;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://ports.yougetsignal.com/check-port.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
$aq= curl_exec($ch);
if (preg_match("/open/", $aq)) {
	echo "\n\n[+] Result : [$url] dan Port [$Port] Terbuka";
}else{
	echo "\n\n[-] Result : [$url] dan Port [$Port] Tertutup";
}
?>
