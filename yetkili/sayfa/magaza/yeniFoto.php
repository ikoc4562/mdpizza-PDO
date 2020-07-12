<?
// menu sayilari aliniyor.
$kac = mysql_query("SELECT * FROM magazagaleri");
$say = mysql_num_rows($kac);
// son sıra sayic
$sonsayi = $say + "1";

if ($_POST['islem'] == "magazagaleriekle"){
	
  
if($hata == ""){

if ($_FILES["fotograf"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);		
}
 	
$icerik = str_replace("","",$_POST['baslik']);
$icerik = str_replace("'","`",$icerik);
 	
$sql = mysql_query("INSERT INTO magazagaleri (baslik,kat,fotograf,aktif,sira) VALUES ('".$icerik."','".$_POST['kat']."','".$resim."','1','".$sonsayi."')");
$mesaj = 'başarılı';

} if($hata != ""){
	hata($hata);
 }?>


<? }?>

  <div class="wrapper">
         <? if($mesaj != ""){?>
 <div class="alert alert-success">Yeni Veri Başarıyla Kaydedildi! Bekleyiniz.
 <meta http-equiv="refresh" content="3;URL=index.php?page=magaza&git=Fotograf&id=<?=$_POST['kat']?>" />
</div>
<div class="clear"></div><BR /><BR />
<? }?>     
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Yeni Ekle</h3>
                        </div>
                        <div class="panel-body">
                        
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div class="col-sm-12">
  <label> Açıklama</label><input type="text" name="baslik" id="baslik" value="<?=$_POST['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
 
    <div class="col-sm-12">
  <label>Fotoğraf  </label>
  <input class="form-control tooltips" data-trigger="hover" data-toggle="tooltip" type="file" name="fotograf" id="fotograf"/>
</div>
            
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">
<input name="islem" type="hidden" id="islem" value="magazagaleriekle" />
<input name="kat" type="hidden" id="kat" value="<?=$_GET['id']?>" />
<input type="submit" name="button" id="button" value="Ekle" class="btn btn-warning btn-lg"/>
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