<?
 	
	if($_GET['islem'] == "sil"){
		
		mysql_query("DELETE FROM bulten WHERE id = '".$_GET['aid']."'");
		$mesaj = "Başarıyla Silindi";
				}

if($_GET['islem'] == "yukari"){
	
$eksilt = $_GET['sira'] - "1";

$bulten = mysql_query("SELECT * FROM bulten WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($bulten);

mysql_query("UPDATE bulten SET sira=sira-1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE bulten SET sira=sira+1 WHERE id='".$bbb['id']."'");

	}
	if($_GET['islem'] == "asagi"){
	
$eksilt = $_GET['sira'] + "1";

$bulten = mysql_query("SELECT * FROM bulten WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($bulten);

mysql_query("UPDATE bulten SET sira=sira+1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE bulten SET sira=sira-1 WHERE id='".$bbb['id']."'");
  	}
 ?>
 
       <form id="sayfalar">

           <div class="row">
        <div class="col-sm-12">
         <div class="wrapper">
  <? if($mesaj != ""){?>
 <div class="alert alert-success">
 Başarıyla Silindi!
</div>
<div class="clear"></div><BR /> 
<? }?>     
        <section class="panel">
        <header class="panel-heading">
          Gönderilen Bültenler
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>
          
        </header>
        
        <div class="panel-body">
        
 
        <div class="adv-table">
    
        <table  class="display table table-bordered table-striped" id="dynamic-table">
     
        <thead>
         
        <tr>
                    <th>&nbsp;</th>

              <th>Konu</th>
			  <th>Tarih</th>
             <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
<?php 
$sql = mysql_query("SELECT * FROM bulten ORDER by id ASC");
while($cek = mysql_fetch_assoc($sql)){
?>
<tr class="gradeA">
           <td></td>
             <td><?=$cek['baslik']?></td>
			  <td><?=$cek['tarih']?></td>
                   <td class="hidden-phone"> 
                   
 				  <a href="index.php?page=Users&git=BDuzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
				  <a href="#" title="Sil" onclick="javascript:if(confirm('Silmek istediginize eminmisiniz?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>                  
                  </td>
        </tr><? if($kactane > "0"){ ?>
<?
while($cek2 = mysql_fetch_assoc($sql2)){
?><?php } } } ?>
        
        </tbody>
      
        </table>
    
        </div>
    
        </div>
              
        </section>
        </div>
        </div>
        </div>
</form>