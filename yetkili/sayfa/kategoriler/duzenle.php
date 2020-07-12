<?

if ($_POST['islem'] == "duzenle"){


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

mysql_query("UPDATE indirim SET name='".$nimi."',explain99='".$explain."',aktif='".$_POST['aktif']."',normaali='".$normaali."' WHERE id = '".$_GET['id']."'");



$mesaj = 'Onnistunut';
}

$ssql = mysql_query("SELECT * FROM indirim WHERE id = '".$_GET['id']."'");
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