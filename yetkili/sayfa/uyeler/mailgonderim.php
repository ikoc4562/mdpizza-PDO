  <?php
	//include('../../../taglar.php');
	include('../taglar.php');
	if ($_POST['islem'] == "gonder"){
 		
	$baslik = str_replace("","",$_POST['baslik']);
	$baslik = str_replace("'","`",$baslik);
	
	$icerik = str_replace("","",$_POST['icerik']);
	$icerik = str_replace("'","`",$icerik);
	
	foreach ($_POST['sayfa'] as $sayfam){
				
	$sayfadeger .= $sayfam.",";
				
	}
		
 	$sql = mysql_query("INSERT INTO bulten (sayfa,baslik,icerik,tarih) VALUES ('".$sayfadeger."','".$baslik."','".$icerik."','".$_POST['tarih']."')");
	
	/*
	require_once('../../../class.phpmailer.php');
	require_once('../../../ayarlar.php');
	*/
	
	require_once('../class.phpmailer.php');
	require_once('../ayarlar.php');
	
	$mailadres = $_POST["email"];
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->IsSMTP();
	$mail->Host = $mailhost;
	$mail->SMTPAuth = true;
	$mail->Username = $mailkullanici;
	$mail->Password = $mailsifre;
	$mail->From = $gonderilecekadres;
	$mail->Fromname = "HGK-Haber Bülteni";

 	// Kullanıcılar listeleniyor.
	
	foreach ($_POST['sayfa'] as $sayfam){
				
	$sayfadeger2 .= $sayfam.",";
				
	}
		
	$of2 = substr($sayfadeger2,0,strlen($sayfadeger2)-1);

	$uyealx = mysql_query("SELECT * FROM users WHERE aktif = '".strip_tags(mysql_escape_string('1'))."' and sayfa in(".$of2.") order by id DESC");
	while($cekx = mysql_fetch_assoc($uyealx)){
	//$mail->AddBCC($cekx['email']);
	$mail->AddAddress(trim($cekx['email']));
	}
	$konu = ''.$_POST['baslik'].'';
	$mail->Subject = $konu;
	$mesaj = ''.$_POST['icerik'].' <br />
	<a href="http://www.hgk.msb.gov.tr/mailcikar" style="font-family:Arial; font-size:10px;"><u>Harita Genel Komutanlığı`ndan e-Posta almak istemiyorsanız lütfen tıklayın.</u></a>
	';
	$mail->Body = $mesaj;
	$mail->IsHTML(true);  /* <== call IsHTML() after $mail->Body has been set. */

 	if(!$mail->Send())
	{
	   echo '<font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	echo '<script>alert("Bülten Başarıyla Gönderildi.");</script>
	';
	$mail->ClearAddresses(); 
	$mail->ClearAttachments();
		}
?>

  
  <div class="wrapper">
  
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Bülten Gönderimi</h3>
                        </div>
                        <div class="panel-body">

  <div id="tabs">
    


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

  
            
 <div class="col-sm-12">
<strong>Dikkat:</strong> Gönder butonuna bastıktan sonra &quot;Başarıyla gönderildi&quot; ibaresini görmeden sayfayı kapatmayınız. E-posta sayısına göre gönderim süresi değişecektir. </div>

<div class="square-green single-row">
<br /><br />
<div class="checkbox "><label><strong>Haber Grubu</strong></label>&nbsp;<br />
 Jeodezi
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="1"/>
Fotogrametri
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="2"/>
Kartografya
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="3"/>
Coğrafi Bilgi Sistemleri
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="4"/>
Genel
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="5"/>
</div>
</div>

           
 <div class="col-sm-12">
  <label> Başlık</label><input type="text" name="baslik" id="baslik" value="<?=$_POST['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12">
<label>İçerik</label>
 <textarea name="icerik" class="ckeditor"></textarea></div> 

  <div class="col-sm-12">
    <input name="islem" type="hidden" id="islem" value="gonder" />
    <input name="tarih" type="hidden" value="<?=Date("Y-m-d")?>" />
    <input type="submit" name="button" id="button" value="Gönder" class="btn btn-warning btn-lg"/>
  </div>
 
  </form>
  </div>
  </div>
  </div>

<script type="text/javascript" charset="utf-8">
    (function(){
      var tabs =document.getElementById('tabs');
      var nav = tabs.getElementsByTagName('input');
      
      /* 
      * Hide all tabs
      */
      function hideTabs(){
        var tab = tabs.getElementsByTagName('div');
        for(i in tab){
          if(tab[i].className == 'dil'){
            tab[i].className = tab[i].className + ' hide';
          }
        }
      }
      
      /*
      * Show the clicked tab
      */
      function showTab(tab){
        hideTabs();
        document.getElementById(tab).className = document.getElementById(tab).className.replace('hide', '');
      }
      
      hideTabs(); /* hide tabs on load */
      
      /* 
      * Add click events
      */
      for(i in nav){
        nav[i].onclick = function(){
          showTab(this.className);
        }
      }
    })();
  </script>