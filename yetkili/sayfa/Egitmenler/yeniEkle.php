<?

if ($_POST['islem'] == "egitmenlerekle"){
	
  
if($hata == ""){

if ($_FILES["fotograf"]["name"] != ""){
	
			$kaynak = "../images/egitmenler/".$_GET['resimadi'];
			@unlink($kaynak);
			$hedef	= "../images/egitmenler";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);
			
			mysql_query("UPDATE egitmenler SET resim = '".$resim."' WHERE id = '".$_GET['id']."'");
}


$tarih = date('d-m-Y');

$adsoyad = str_replace("","",$_POST['adsoyad']);
$adsoyad = str_replace("'","`",$adsoyad);

$email = str_replace("","",$_POST['email']);
$email = str_replace("'","`",$email);

$telefon = str_replace("","",$_POST['telefon']);
$telefon = str_replace("'","`",$telefon);

$facebook = str_replace("","",$_POST['facebook']);
$facebook = str_replace("'","`",$facebook);

$instagram = str_replace("","",$_POST['instagram']);
$instagram = str_replace("'","`",$instagram);

$il = str_replace("","",$_POST['il']);
$il = str_replace("'","`",$il);

$icerik = str_replace("","",trim($_POST['icerik']));
$icerik = str_replace("'","`",$icerik);


mysql_query("insert into egitmenler(adsoyad,aktif,email,telefon,facebook,instagram,resim,tarih,il,hakkinda) values('".$adsoyad."','".$_POST['aktif']."','".$email."','".$telefon."','".$facebook."','".$instagram."','".$resim."','".$tarih."','".$il."','".trim($icerik)."')");


$mesaj = 'başarılı';
} if($hata != ""){
	hata($hata);
 }?>


<? }?>

  <div class="wrapper">
         <? if($mesaj != ""){?>
 <div class="alert alert-success">Yeni Veri Başarıyla Kaydedildi!
</div>
<div class="clear"></div><BR /><BR />
<? }?>     
    <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-datepicker/css/datepicker-custom.css" />
  <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-timepicker/css/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-colorpicker/css/colorpicker.css" />
  <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
  <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-datetimepicker/css/datetimepicker-custom.css" />     <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Yeni Ekle</h3>
                        </div>
                        <div class="panel-body">


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div class="col-sm-12">
  <label> Adı Soyadı</label><input type="text" name="adsoyad" id="adsoyad" value="<?=$upcek['adsoyad']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

 <div class="col-sm-12">
  <label> Telefon </label>
  <input type="text" name="telefon" id="telefon" value="<?=$upcek['telefon']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

 <div class="col-sm-12">
  <label> E-Posta</label><input type="text" name="email" id="email" value="<?=$upcek['email']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

 <div class="col-sm-12">
  <label> Facebook</label><input type="text" name="facebook" id="facebook" value="<?=$upcek['facebook']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

 <div class="col-sm-12">
  <label> Instagram</label><input type="text" name="instagram" id="instagram" value="<?=$upcek['instagram']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

 <div class="col-sm-12">
  <label> Şehir</label><input type="text" name="il" id="il" value="<?=$upcek['il']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div> 
  
 

<div class="col-sm-12">Özgeçmiş
  <textarea name="icerik" class="ckeditor"><?=$upcek['hakkinda']?></textarea>  </div>

         
  
 <div class="col-sm-12">
  <label> Fotoğrafı</label>
  <input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" type="file" name="fotograf" id="fotograf"/> 
</div>

  <div class="square-green single-row"><div class="checkbox "><label>Aktif</label>
<input class="form-control checkbox" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <? if($upcek['aktif'] == "1"){echo "checked";}?>/></div></div>         
 
  <div class="col-sm-12">
<input name="islem" type="hidden" id="islem" value="egitmenlerekle" />

<input type="submit" name="button" id="button" value="Ekle" class="btn btn-warning btn-lg"/>
  </div>
 
  </form>

</div>
</form>
</div>
</div></div>
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