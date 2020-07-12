<?
 	
	if($_GET['islem'] == "sil"){
		
		mysql_query("DELETE FROM kurumsalgaleri WHERE id = '".$_GET['aid']."'");
		$mesaj = "Başarıyla Silindi";
				}
				
				if($_GET['islem'] == "yukari"){
	
$eksilt = $_GET['sira'] - "1";

$sss = mysql_query("SELECT * FROM kurumsalgaleri WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE kurumsalgaleri SET sira=sira-1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE kurumsalgaleri SET sira=sira+1 WHERE id='".$bbb['id']."'");

	}
	if($_GET['islem'] == "asagi"){
	
$eksilt = $_GET['sira'] + "1";

$sss = mysql_query("SELECT * FROM kurumsalgaleri WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE kurumsalgaleri SET sira=sira+1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE kurumsalgaleri SET sira=sira-1 WHERE id='".$bbb['id']."'");
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
        <?
		$sql2 = mysql_query("SELECT * FROM kurumsal WHERE id = '".$_GET['id']."' ORDER by sira ASC");
		$cekk = mysql_fetch_assoc($sql2);?>

            <?=$cekk['baslik']?> Sayfası Fotoğrafları
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>
          
        </header>
        
        <div class="panel-body">
        
          <a href="index.php?page=Kurumsal&git=yeniFoto&id=<?=$_GET['id']?>" class="btn btn-primary btn-lg"> Yeni Ekle </a>

        <div class="adv-table">
    
        <table  class="display table table-bordered table-striped" id="dynamic-table">
     
        <thead>
         
        <tr>
        <th></th>
              <th>Fotoğraf adı </th>
             <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
     <?php 
$sql = mysql_query("SELECT * FROM kurumsalgaleri WHERE kat = '".$_GET['id']."' ORDER by sira ASC");
while($cek = mysql_fetch_assoc($sql)){
	
?>
<tr class="gradeA">
           <td></td>
             <td><img src="../kucult.php?w=200&img=../images/kurumsal/<?=$cek['fotograf']?>" style="padding-right:10px;" /><?=$cek['baslik']?></td>
              
                  <td class="hidden-phone"> 
                   <? if($cek['sira'] != "1"){ ?>
   			      <a href="index.php?page=Kurumsal&git=Fotograf&id=<?=$_GET['id']?>&islem=yukari&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Yukarı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-up"></i></a>
				  <? } if ($cek['sira'] != $kactanecik){?>
   				  <a href="index.php?page=Kurumsal&git=Fotograf&id=<?=$_GET['id']?>&islem=asagi&aid=<?=$cek['id']?>&sira=<?=$cek['sira']?>" title="Aşağı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-down"></i></a>
				  <? }?>
                  
	<a href="index.php?page=Kurumsal&git=FotoDuzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
	<a href="#" title="Sil" onclick="javascript:if(confirm('Silmek istediginize eminmisiniz?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>                  
                  </td>
        </tr><?php } ?>
        
        </tbody>
      
        </table>
    
        </div>
    
        </div>
              
        </section>
        </div>
        </div>
        </div>
</form>