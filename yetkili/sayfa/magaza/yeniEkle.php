<?
// menu sayilari aliniyor.
$kac = mysql_query("SELECT * FROM menu");
$say = mysql_num_rows($kac);
// son sıra sayic
$sonsayi = $say + "1";

if ($_POST['islem'] == "magazaekle"){
	
  
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

if ($_FILES["fotograf2"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf2"]["tmp_name"];
			$resim1		= $_FILES["fotograf2"]["name"];
			$rtipi1		= $_FILES["fotograf2"]["type"];
			$rboyut1	= $_FILES["fotograf2"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim2 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim2);
						

			
}

if ($_FILES["fotograf3"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf3"]["tmp_name"];
			$resim1		= $_FILES["fotograf3"]["name"];
			$rtipi1		= $_FILES["fotograf3"]["type"];
			$rboyut1	= $_FILES["fotograf3"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim3 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim3);
						

			
}

if ($_FILES["fotograf4"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf4"]["tmp_name"];
			$resim1		= $_FILES["fotograf4"]["name"];
			$rtipi1		= $_FILES["fotograf4"]["type"];
			$rboyut1	= $_FILES["fotograf4"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim4 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim4);
						

			
}

if ($_FILES["fotograf5"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf5"]["tmp_name"];
			$resim1		= $_FILES["fotograf5"]["name"];
			$rtipi1		= $_FILES["fotograf5"]["type"];
			$rboyut1	= $_FILES["fotograf5"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim5 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim5);
						

			
}

if ($_FILES["fotograf6"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf6"]["tmp_name"];
			$resim1		= $_FILES["fotograf6"]["name"];
			$rtipi1		= $_FILES["fotograf6"]["type"];
			$rboyut1	= $_FILES["fotograf6"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim6 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim6);
						

            
}

if ($_FILES["fotograf7"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf7"]["tmp_name"];
			$resim1		= $_FILES["fotograf7"]["name"];
			$rtipi1		= $_FILES["fotograf7"]["type"];
			$rboyut1	= $_FILES["fotograf7"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim7 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim7);
						

			
}

if ($_FILES["fotograf8"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf8"]["tmp_name"];
			$resim1		= $_FILES["fotograf8"]["name"];
			$rtipi1		= $_FILES["fotograf8"]["type"];
			$rboyut1	= $_FILES["fotograf8"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim8 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim8);
		
}

if ($_FILES["fotograf9"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf9"]["tmp_name"];
			$resim1		= $_FILES["fotograf9"]["name"];
			$rtipi1		= $_FILES["fotograf9"]["type"];
			$rboyut1	= $_FILES["fotograf9"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim9 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim9);
			
}

if ($_FILES["fotograf10"]["name"] != ""){
$hedef	= "../images/magaza";
			$kaynak1	= $_FILES["fotograf10"]["tmp_name"];
			$resim1		= $_FILES["fotograf10"]["name"];
			$rtipi1		= $_FILES["fotograf10"]["type"];
			$rboyut1	= $_FILES["fotograf10"]["size"];
			$ruzanti1 	= substr($resim1, -4);
			$yeniad1	= substr(uniqid(md5(rand())), 0,15);
			$resim10 = $yeniad1.$ruzanti1;
			@move_uploaded_file($kaynak1,$hedef.'/'.$resim10);
								
}

$tarih = date('Y-m-d');;

$name = str_replace("","",$_POST['name']);
$name = str_replace("'","`",$name);

$normaali = str_replace("","",$_POST['normaali']);
$normaali = str_replace("'","`",$normaali);

$perhe = str_replace("","",$_POST['perhe']);
$perhe = str_replace("'","`",$perhe);

$explain = str_replace("","",$_POST['explain']);
$explain = str_replace("'","`",$explain);


$sql = mysql_query("INSERT INTO menu (name,explain99,normaali,perhe,tyyppi,aktif) VALUES ('".$name."','".$explain."','".$normaali."','".$perhe."','".$_POST["tyyppi"]."','1')");


$mesaj = 'Onnistunut';
} if($hata != ""){
	hata($hata);
 }?>


<? }?>

  <div class="wrapper">
         <? if($mesaj != ""){?>
 <div class="alert alert-success">Uudet tiedot on tallennettu onnistuneesti!
</div>
<div class="clear"></div><BR /><BR />
<? }?>     
    <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-datepicker/css/datepicker-custom.css" />
  <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-timepicker/css/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-colorpicker/css/colorpicker.css" />
  <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
  <link rel="stylesheet" type="text/css" href="tema/anatol/js/bootstrap-datetimepicker/css/datetimepicker-custom.css" />     <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lisää uusi</h3>
                        </div>
                        <div class="panel-body">
                        
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div class="col-sm-12">
  <label>Nimi</label><input type="text" name="name" id="name" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>




<div class="col-sm-12">
<label>Sisällä</label>
 <textarea name="explain" class="form-control tooltips"></textarea>  </div>
	

<div class="col-sm-12">
  <label>Normaali Hinta</label>
<input type="text" name="normaali" id="normaali" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12">
  <label>Perhe Hinta</label>
<input type="text" name="perhe" id="perhe" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
 
<div class="col-sm-12">
  <label>Tyyppi</label>
<select name="tyyppi" id="tyyppi" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip">
<?php
	$sql = mysql_query("SELECT * FROM tyyppi order by id ASC");
while($cek = mysql_fetch_assoc($sql)){
?>
<option value="<?=$cek['id']?>"><?=$cek['nimi']?></option>
	<?php
	}
	?>
</select>
</div>


         
   <div class="col-sm-12">
<input name="islem" type="hidden" id="islem" value="magazaekle" />
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