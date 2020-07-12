<?
 	
	if($_GET['islem'] == "sil"){
		
		mysql_query("DELETE FROM kurumsal WHERE id = '".$_GET['aid']."'");
		$mesaj = "Başarıyla Silindi";
				}

if($_GET['islem'] == "yukari"){
	
$eksilt = $_GET['sira'] - "1";

$sss = mysql_query("SELECT * FROM kurumsal WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE kurumsal SET sira=sira-1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE kurumsal SET sira=sira+1 WHERE id='".$bbb['id']."'");

	}
	if($_GET['islem'] == "asagi"){
	
$eksilt = $_GET['sira'] + "1";

$sss = mysql_query("SELECT * FROM kurumsal WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE kurumsal SET sira=sira+1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE kurumsal SET sira=sira-1 WHERE id='".$bbb['id']."'");
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
            Kurumsal
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br>
          
        </header>
        
        <div class="panel-body">
        
<!--          <a href="index.php?page=Kurumsal&git=yeniEkle" class="btn btn-primary btn-lg"> Yeni Sayfa Ekle </a>
 -->
        <div class="adv-table">
    
        <table  class="display table table-bordered table-striped" id="dynamic-table">
     
        <thead>
         
        <tr>

              <th>Sayfa adı </th>
             <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
     <?php 
$sql = mysql_query("SELECT * FROM kurumsal");
while($cek = mysql_fetch_assoc($sql)){

?>
<tr class="gradeA">
             <td><?=$cek['baslik']?></td>
                   <td class="hidden-phone"> 
    
              
                  <a href="index.php?page=kurumsal&git=Duzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
			               
                  </td>
        </tr><? if($kactane > "0"){ ?>
<?
while($cek2 = mysql_fetch_assoc($sql2)){
?>
<tr class="gradeA">
           <td></td>
             <td style="padding-left:30px;">- <?=$cek2['baslik']?></td>
              
                  <td class="hidden-phone"> 
                  
				  <? if($cek2['sira'] != "1"){ ?>
   			      <a href="index.php?page=sayfalar&id=58&islem=yukari&aid=<?=$cek2['id']?>&sira=<?=$cek2['sira']?>" title="Yukarı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-up"></i></a>
				  <? } if ($cek2['sira'] != $kactanecik2){?>
   				  <a href="index.php?page=sayfalar&id=58&islem=asagi&aid=<?=$cek2['id']?>&sira=<?=$cek2['sira']?>" title="Aşağı Taşı" class="btn btn-default active"><i class="fa fa-arrow-circle-down"></i></a>
				  <? } ?>
                  
                    <a href="index.php?page=Kurumsal&git=Fotograf&id=<?=$cek2['id']?>" title="Fotoğraflar" class="btn btn-default active"><i class="fa fa-camera"></i></a>
                                        <a href="index.php?page=Kurumsal&git=Dosya&id=<?=$cek2['id']?>" title="Dosyalar" class="btn btn-default active"><i class="fa fa-folder"></i></a>

                 <a href="index.php?page=Kurumsal&git=Duzenle&id=<?=$cek2['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
                   <a href="#" title="Sil" onclick="javascript:if(confirm('Silmek istediginize eminmisiniz?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek2['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>                  
                  </td>
        </tr><?php } } } ?>
        
        </tbody>
      
        </table>
    
        </div>
    
        </div>
              
        </section>
        </div>
        </div>
        </div>
</form>