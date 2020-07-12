<?php ob_start();

include '../config.php';
include '../lib/lib.php';
include '../class/class.php';


			$uyesor = mysql_query("SELECT eposta,sifre FROM  uyeler where eposta='$_POST[eposta]' and sifre='$_POST[sifre]'");
				
		if(mysql_num_rows($uyesor) > 0){
			
			echo 1;
			//header("location:$_SERVER[HTTP_REQUEST]");
			
			
			
		}else{
			
			echo "ÜYELİK YOK";
		}
			
		
 ?>