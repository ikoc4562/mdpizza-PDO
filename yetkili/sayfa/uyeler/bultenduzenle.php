 <?php
 $ssql = mysql_query("SELECT * FROM bulten WHERE id = '".$_GET['id']."'");
$upcek = mysql_fetch_assoc($ssql);?>
  
  <div class="wrapper">
  
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Gönderilen Bülten</h3>
                        </div>
                        <div class="panel-body">

<form action="<?=$_SERVER['REQUEST_URI']?>&resimadi=<?=$upcek['fotograf']?>&resimadi2=<?=$upcek['fotograf2']?>&resimadi3=<?=$upcek['fotograf3']?>&resimadi4=<?=$upcek['fotograf4']?>&resimadi5=<?=$upcek['fotograf5']?>&resimadi6=<?=$upcek['fotograf6']?>&resimadi7=<?=$upcek['fotograf7']?>&resimadi8=<?=$upcek['fotograf8']?>&resimadi9=<?=$upcek['fotograf9']?>&resimadi10=<?=$upcek['fotograf10']?>&resimadi11=<?=$upcek['fotograf11']?>&sira=<?=$upcek['sira']?>" method="post" enctype="multipart/form-data">
  <div id="tabs">
    


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

  
  

<div class="square-green single-row">
<div class="checkbox "><label><strong>Haber Grubu</strong></label>&nbsp;<br />
  Jeodezi
    <input name="sayfa[]" type="checkbox" id="sayfa[]" value="1" <? 
	$sq1 = mysql_query("SELECT * FROM bulten WHERE sayfa LIKE '%1%' and id = '".$_GET['id']."'");
	$varmi1 = mysql_num_rows($sq1);
	if ($varmi1 == "1"){ echo 'checked="checked"';}?> />
Fotogrametri
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="2" <? 
	$sq1 = mysql_query("SELECT * FROM bulten WHERE sayfa LIKE '%2%' and id = '".$_GET['id']."'");
	$varmi1 = mysql_num_rows($sq1);
	if ($varmi1 == "1"){ echo 'checked="checked"';}?>/>
Kartografya
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="3" <? 
	$sq1 = mysql_query("SELECT * FROM bulten WHERE sayfa LIKE '%3%' and id = '".$_GET['id']."'");
	$varmi1 = mysql_num_rows($sq1);
	if ($varmi1 == "1"){ echo 'checked="checked"';}?>/>
Coğrafi Bilgi Sistemleri
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="4" <? 
	$sq1 = mysql_query("SELECT * FROM bulten WHERE sayfa LIKE '%4%' and id = '".$_GET['id']."'");
	$varmi1 = mysql_num_rows($sq1);
	if ($varmi1 == "1"){ echo 'checked="checked"';}?>/>
Genel
<input name="sayfa[]" type="checkbox" id="sayfa[]" value="4" <? 
	$sq1 = mysql_query("SELECT * FROM bulten WHERE sayfa LIKE '%5%' and id = '".$_GET['id']."'");
	$varmi1 = mysql_num_rows($sq1);
	if ($varmi1 == "1"){ echo 'checked="checked"';}?>/>
    
</div>
</div>

           
 <div class="col-sm-12">
  <label> Başlık</label><input type="text" name="baslik" id="baslik" value="<?=$upcek['baslik']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>

<div class="col-sm-12">
<label>İçerik</label>
 <textarea name="icerik" class="ckeditor"><?=$upcek['icerik']?></textarea></div> 
 
 <div class="col-sm-12">
  <label> Tarih</label><input type="text" name="baslik" id="baslik" value="<?=$upcek['tarih']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
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