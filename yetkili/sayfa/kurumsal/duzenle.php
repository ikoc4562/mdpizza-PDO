<?

if ($_POST['islem'] == "duzenle"){


if ($_FILES["fotograf"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);
			
			mysql_query("UPDATE kurumsal SET fotograf = '".$resim."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf2"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi2'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf2"]["tmp_name"];
			$resim1		= $_FILES["fotograf2"]["name"];
			$rtipi1		= $_FILES["fotograf2"]["type"];
			$rboyut1	= $_FILES["fotograf2"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim2 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim2);
						

			mysql_query("UPDATE kurumsal SET fotograf2 = '".$resim2."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf3"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi3'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf3"]["tmp_name"];
			$resim1		= $_FILES["fotograf3"]["name"];
			$rtipi1		= $_FILES["fotograf3"]["type"];
			$rboyut1	= $_FILES["fotograf3"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim3 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim3);
						

			mysql_query("UPDATE kurumsal SET fotograf3 = '".$resim3."' WHERE id = '".$_GET['id']."'");
}


if ($_FILES["fotograf4"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi4'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf4"]["tmp_name"];
			$resim1		= $_FILES["fotograf4"]["name"];
			$rtipi1		= $_FILES["fotograf4"]["type"];
			$rboyut1	= $_FILES["fotograf4"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim4 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim4);
						

			mysql_query("UPDATE kurumsal SET fotograf4 = '".$resim4."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf5"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi5'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf5"]["tmp_name"];
			$resim1		= $_FILES["fotograf5"]["name"];
			$rtipi1		= $_FILES["fotograf5"]["type"];
			$rboyut1	= $_FILES["fotograf5"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim5 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim5);
						

			mysql_query("UPDATE kurumsal SET fotograf5 = '".$resim5."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf6"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi6'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf6"]["tmp_name"];
			$resim1		= $_FILES["fotograf6"]["name"];
			$rtipi1		= $_FILES["fotograf6"]["type"];
			$rboyut1	= $_FILES["fotograf6"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim6 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim6);
						

			mysql_query("UPDATE kurumsal SET fotograf6 = '".$resim6."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf7"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi7'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf7"]["tmp_name"];
			$resim1		= $_FILES["fotograf7"]["name"];
			$rtipi1		= $_FILES["fotograf7"]["type"];
			$rboyut1	= $_FILES["fotograf7"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim7 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim7);
						

			mysql_query("UPDATE kurumsal SET fotograf7 = '".$resim7."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf8"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi8'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf8"]["tmp_name"];
			$resim1		= $_FILES["fotograf8"]["name"];
			$rtipi1		= $_FILES["fotograf8"]["type"];
			$rboyut1	= $_FILES["fotograf8"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim8 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim8);
						

			mysql_query("UPDATE kurumsal SET fotograf8 = '".$resim8."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf9"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi9'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf9"]["tmp_name"];
			$resim1		= $_FILES["fotograf9"]["name"];
			$rtipi1		= $_FILES["fotograf9"]["type"];
			$rboyut1	= $_FILES["fotograf9"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim9 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim9);
						

			mysql_query("UPDATE kurumsal SET fotograf9 = '".$resim9."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf10"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi10'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf10"]["tmp_name"];
			$resim1		= $_FILES["fotograf10"]["name"];
			$rtipi1		= $_FILES["fotograf10"]["type"];
			$rboyut1	= $_FILES["fotograf10"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim10 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim10);
						

			mysql_query("UPDATE kurumsal SET fotograf10 = '".$resim10."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf11"]["name"] != ""){
	
			$kaynak = "../images/kurumsal/".$_GET['resimadi11'];
			@unlink($kaynak);
			$hedef	= "../images/kurumsal";
			$kaynak1	= $_FILES["fotograf11"]["tmp_name"];
			$resim1		= $_FILES["fotograf11"]["name"];
			$rtipi1		= $_FILES["fotograf11"]["type"];
			$rboyut1	= $_FILES["fotograf11"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim11 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim11);
						

			mysql_query("UPDATE kurumsal SET fotograf11 = '".$resim11."' WHERE id = '".$_GET['id']."'");
}

$baslik = str_replace("","",$_POST['baslik']);
$baslik = str_replace("'","`",$baslik);

$baslik_eng = str_replace("","",$_POST['baslik_eng']);
$baslik_eng = str_replace("'","`",$baslik_eng);

$icerik = str_replace("","",$_POST['icerik']);
$icerik = str_replace("'","`",$icerik);

$icerik_eng = str_replace("","",$_POST['icerik_eng']);
$icerik_eng = str_replace("'","`",$icerik_eng);

$ozet = str_replace("","",$_POST['ozet']);
$ozet = str_replace("'","`",$ozet);

$ozet_eng = str_replace("","",$_POST['ozet_eng']);
$ozet_eng = str_replace("'","`",$ozet_eng);

mysql_query("UPDATE kurumsal SET icerik='".$icerik."',aktif='".$_POST['aktif']."' WHERE id = '".$_GET['id']."'");


$mesaj = 'başarılı';
}

$ssql = mysql_query("SELECT * FROM kurumsal WHERE id = '".$_GET['id']."'");
$upcek = mysql_fetch_assoc($ssql);
?>

  <div class="wrapper">
         <? if($mesaj != ""){?>
 <div class="alert alert-success">Başarıyla Düzenlendi!
</div>
<div class="clear"></div><BR /><BR />
<? }?>     
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Düzenle</h3>
                        </div>
                        <div class="panel-body">

<form action="<?=$_SERVER['REQUEST_URI']?>&resimadi=<?=$upcek['fotograf']?>&resimadi2=<?=$upcek['fotograf2']?>&resimadi3=<?=$upcek['fotograf3']?>&resimadi4=<?=$upcek['fotograf4']?>&resimadi5=<?=$upcek['fotograf5']?>&resimadi6=<?=$upcek['fotograf6']?>&resimadi7=<?=$upcek['fotograf7']?>&resimadi8=<?=$upcek['fotograf8']?>&resimadi9=<?=$upcek['fotograf9']?>&resimadi10=<?=$upcek['fotograf10']?>&resimadi11=<?=$upcek['fotograf11']?>&sira=<?=$upcek['sira']?>" method="post" enctype="multipart/form-data">
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <div class="square-green single-row"><div class="checkbox "><label>Aktif</label>
<input class="form-control checkbox" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <? if($upcek['aktif'] == "1"){echo "checked";}?>/></div></div>

<div class="col-sm-12">
<label>İçerik</label>
 <textarea name="icerik" cols="100" rows="10"><?=$upcek['icerik']?></textarea>  
 </div>

             <div class="col-sm-12">
    <input name="islem" type="hidden" id="islem" value="duzenle" />
    <input type="submit" name="button" id="button" value="Düzenle" class="btn btn-warning btn-lg"/>
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