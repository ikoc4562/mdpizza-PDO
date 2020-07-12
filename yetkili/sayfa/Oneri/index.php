<?
 	
	if($_GET['islem'] == "sil"){
		
		mysql_query("DELETE FROM booktable WHERE id = '".$_GET['aid']."'");
		$mesaj = " Poistettu onnistuneesti!
";
				}

if($_GET['islem'] == "yukari"){
	
$eksilt = $_GET['sira'] - "1";

$sss = mysql_query("SELECT * FROM booktable WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE oneri SET sira=sira-1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE oneri SET sira=sira+1 WHERE id='".$bbb['id']."'");

	}
	if($_GET['islem'] == "asagi"){
	
$eksilt = $_GET['sira'] + "1";

$sss = mysql_query("SELECT * FROM booktable WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE oneri SET sira=sira+1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE oneri SET sira=sira-1 WHERE id='".$bbb['id']."'");
  	}
 ?>
 
       <form id="sayfalar">

           <div class="row">
        <div class="col-sm-12">
         <div class="wrapper">
  <? if($mesaj != ""){?>
 <div class="alert alert-success">
 Poistettu onnistuneesti!
</div>
<div class="clear"></div><BR /> 
<? }?>     
        <section class="panel">
        <header class="panel-heading">
            Varaukset
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
              <th>Nr.</th>
			  <th>Aika</th>
              <th>Lähettejä</th>
              <th>Vaihtoehdot</th>
        </tr>
        </thead>
        <tbody>
     <?php 
$sql = mysql_query("SELECT * FROM booktable ORDER by id DESC");
while($cek = mysql_fetch_assoc($sql)){
?>
<tr class="gradeA">
           <td><?=$cek['id']?></td>
			<td><?=$cek['date']?>-<?=$cek['time']?></td>
             <td<?php if ($cek['aktif'] == '0'){?> style="font-weight:bold;"<?php } ?>><?=$cek['name']?></td>
                   <td class="hidden-phone"> 
 
                  <a href="index.php?page=Oneri&git=Duzenle&id=<?=$cek['id']?>" title="Görüntüle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
				  <a href="#" title="Sil" onclick="javascript:if(confirm('Silmek istediginize eminmisiniz?'))location = '<?=$_SERVER['REQUEST_URI']?>&islem=sil&amp;aid=<?=$cek['id']?>';" class="btn btn-default active urunSil">
                     <i class="fa fa-minus-circle "></i></a>                  
                  </td>
        </tr>
        <?php } ?>
        
        </tbody>
      
        </table>
    
        </div>
    
        </div>
              
        </section>
        </div>
        </div>
        </div>
</form>