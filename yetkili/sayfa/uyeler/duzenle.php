<?

if ($_POST['islem'] == "duzenle"){


mysql_query("UPDATE uyeler SET adsoyad='".$_POST['adsoyad']."',eposta='".$_POST['eposta']."',sifre='".$_POST['sifre']."' WHERE id = '".$_GET['id']."'");


$mesaj = 'başarılı';
}

$ssql = mysql_query("SELECT * FROM uyeler WHERE id = '".$_GET['id']."'");
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



<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <div class="col-sm-12">
  <label> Ad Soyad</label><input type="text" name="adsoyad" id="adsoyad" value="<?=$upcek['adsoyad']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
     <div class="col-sm-12">
  <label> eposta</label><input type="text" name="eposta" id="eposta" value="<?=$upcek['eposta']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
</div>
     <div class="col-sm-12">
  <label> şifre</label><input type="text" name="sifre" id="sifre" value="<?=$upcek['sifre']?>" class="form-control tooltips" data-trigger="hover" data-toggle="tooltip"/>
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