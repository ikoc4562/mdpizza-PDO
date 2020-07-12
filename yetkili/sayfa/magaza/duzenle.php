<?

if ($_POST['islem'] == "duzenle"){


if ($_FILES["fotograf"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf"]["tmp_name"];
			$resim1		= $_FILES["fotograf"]["name"];
			$rtipi1		= $_FILES["fotograf"]["type"];
			$rboyut1	= $_FILES["fotograf"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim);
			
			mysql_query("UPDATE menu SET fotograf = '".$resim."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf2"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi2'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf2"]["tmp_name"];
			$resim1		= $_FILES["fotograf2"]["name"];
			$rtipi1		= $_FILES["fotograf2"]["type"];
			$rboyut1	= $_FILES["fotograf2"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim2 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim2);
						

			mysql_query("UPDATE menu SET fotograf2 = '".$resim2."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf3"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi3'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf3"]["tmp_name"];
			$resim1		= $_FILES["fotograf3"]["name"];
			$rtipi1		= $_FILES["fotograf3"]["type"];
			$rboyut1	= $_FILES["fotograf3"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim3 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim3);
						

			mysql_query("UPDATE menu SET fotograf3 = '".$resim3."' WHERE id = '".$_GET['id']."'");
}


if ($_FILES["fotograf4"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi4'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf4"]["tmp_name"];
			$resim1		= $_FILES["fotograf4"]["name"];
			$rtipi1		= $_FILES["fotograf4"]["type"];
			$rboyut1	= $_FILES["fotograf4"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim4 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim4);
						

			mysql_query("UPDATE menu SET fotograf4 = '".$resim4."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf5"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi5'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf5"]["tmp_name"];
			$resim1		= $_FILES["fotograf5"]["name"];
			$rtipi1		= $_FILES["fotograf5"]["type"];
			$rboyut1	= $_FILES["fotograf5"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim5 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim5);
						

			mysql_query("UPDATE menu SET fotograf5 = '".$resim5."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf6"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi6'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf6"]["tmp_name"];
			$resim1		= $_FILES["fotograf6"]["name"];
			$rtipi1		= $_FILES["fotograf6"]["type"];
			$rboyut1	= $_FILES["fotograf6"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim6 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim6);
						

			mysql_query("UPDATE menu SET fotograf6 = '".$resim6."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf7"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi7'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf7"]["tmp_name"];
			$resim1		= $_FILES["fotograf7"]["name"];
			$rtipi1		= $_FILES["fotograf7"]["type"];
			$rboyut1	= $_FILES["fotograf7"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim7 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim7);
						

			mysql_query("UPDATE menu SET fotograf7 = '".$resim7."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf8"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi8'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf8"]["tmp_name"];
			$resim1		= $_FILES["fotograf8"]["name"];
			$rtipi1		= $_FILES["fotograf8"]["type"];
			$rboyut1	= $_FILES["fotograf8"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim8 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim8);
						

			mysql_query("UPDATE menu SET fotograf8 = '".$resim8."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf9"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi9'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf9"]["tmp_name"];
			$resim1		= $_FILES["fotograf9"]["name"];
			$rtipi1		= $_FILES["fotograf9"]["type"];
			$rboyut1	= $_FILES["fotograf9"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim9 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim9);
						

			mysql_query("UPDATE menu SET fotograf9 = '".$resim9."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf10"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi10'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf10"]["tmp_name"];
			$resim1		= $_FILES["fotograf10"]["name"];
			$rtipi1		= $_FILES["fotograf10"]["type"];
			$rboyut1	= $_FILES["fotograf10"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim10 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim10);
						

			mysql_query("UPDATE menu SET fotograf10 = '".$resim10."' WHERE id = '".$_GET['id']."'");
}

if ($_FILES["fotograf11"]["name"] != ""){
	
			$kaynak = "../images/magaza/".$_GET['resimadi11'];
			@unlink($kaynak);
			$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf11"]["tmp_name"];
			$resim1		= $_FILES["fotograf11"]["name"];
			$rtipi1		= $_FILES["fotograf11"]["type"];
			$rboyut1	= $_FILES["fotograf11"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim11 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim11);
						

			mysql_query("UPDATE menu SET fotograf11 = '".$resim11."' WHERE id = '".$_GET['id']."'");
}

$tarih = date('Y-m-d');

$nimi = str_replace("","",$_POST['nimi']);
$nimi = str_replace("'","`",$nimi);

$explain = str_replace("","",$_POST['explain']);
$explain = str_replace("'","`",$explain);

$normaali = str_replace("","",$_POST['normaali']);
$normaali = str_replace("'","`",$normaali);

$perhe = str_replace("","",$_POST['perhe']);
$perhe = str_replace("'","`",$perhe);

$durum = str_replace("","",$_POST['durum']);
$durum = str_replace("'","`",$durum);

mysql_query("UPDATE menu SET name='".$nimi."',explain99='".$explain."',aktif='".$_POST['aktif']."',normaali='".$normaali."',perhe='".$perhe."' WHERE id = '".$_GET['id']."'");



$mesaj = 'Onnistunut';
}

$ssql = mysql_query("SELECT * FROM menu WHERE id = '".$_GET['id']."'");
$upcek = mysql_fetch_assoc($ssql);
?>

  <div class="wrapper">
         <? if($mesaj != ""){?>
 <div class="alert alert-success">Toimitettu menestyksekkäästi.
</div>
<div class="clear"></div><BR /><BR />
<? }?>     
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Muokata</h3>
                        </div>
                        <div class="panel-body">

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div class="col-sm-12">
  <label> Ateria</label><input type="text" name="nimi" id="nimi" value="<?=$upcek['name']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12">
  <label> Normaali Hinta</label>
<input type="text" name="normaali" id="normaali" value="<?=$upcek['normaali']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
	<div class="col-sm-12">
  <label> Perhe Hinta</label>
<input type="text" name="perhe" id="perhe" value="<?=$upcek['perhe']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

  <div class="square-green single-row"><div class="checkbox "><label>Aktiivinen</label>
<input class="form-control checkbox" data-trigger="hover" data-toggle="tooltip" name="aktif" id="aktif" type="checkbox" value="1" <? if($upcek['aktif'] == "1"){echo "checked";}?>/></div></div>

<div class="col-sm-12">
<label>Sisältä</label>
 <textarea name="explain" class="form-control tooltips"><?=$upcek['explain99']?></textarea>  </div>


         


         
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