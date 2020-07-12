<?
// menu sayilari aliniyor.
$kac = mysql_query("SELECT * FROM uyeler");
$say = mysql_num_rows($kac);
// son sıra sayic
$sonsayi = $say + "1";

if ($_POST['islem'] == "uyelerekle"){
	
  
if($hata == ""){


$eposta = str_replace("","",$_POST['eposta']);
$eposta = str_replace("'","`",$eposta);

$sifre = str_replace("","",$_POST['sifre']);
$sifre = str_replace("'","`",$sifre);



 		
$sql = mysql_query("INSERT INTO uyeler (eposta,sifre) VALUES ('".$eposta."','".$sifre."')");

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
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Yeni Ekle</h3>
                        </div>
                        <div class="panel-body">
                        
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">


   <div id="tabs">
   <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
     <div class="col-sm-12">
  <label> eposta</label><input type="text" name="eposta" id="eposta" value="<?=$_POST['eposta']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
     <div class="col-sm-12">
  <label> şifre</label><input type="text" name="sifre" id="sifre" value="<?=$_POST['sifre']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

        
     <div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">
<input name="islem" type="hidden" id="islem" value="uyelerekle" />
<input name="kategori" type="hidden" id="kategori" value="<?=$_GET['katid']?>" />
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