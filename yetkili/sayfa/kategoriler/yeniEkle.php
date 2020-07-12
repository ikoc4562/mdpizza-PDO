<?

if ($_POST['islem'] == "kategorilerekle"){
	
  
if($hata == ""){



$tarih = date('d-m-Y');

$name = str_replace("","",$_POST['name']);
$name = str_replace("'","`",$name);

$normaali = str_replace("","",$_POST['normaali']);
$normaali = str_replace("'","`",$normaali);


$explain = str_replace("","",$_POST['explain']);
$explain = str_replace("'","`",$explain);


$sql = mysql_query("INSERT INTO indirim (name,explain99,normaali,aktif) VALUES ('".$name."','".$explain."','".$normaali."','1')");

echo "INSERT INTO indirim (name,explain,normaali,aktif) VALUES ('".$name."','".$explain."','".$normaali."','1')";
	
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
<input name="islem" type="hidden" id="islem" value="kategorilerekle" />

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