<?
 	
	if($_GET['islem'] == "sil"){
		
		mysql_query("DELETE FROM menu WHERE id = '".$_GET['aid']."'");
		$mesaj = "Poistettu onnistuneesti!";
				}

if($_GET['islem'] == "yukari"){
	
$eksilt = $_GET['sira'] - "1";

$sss = mysql_query("SELECT * FROM menu WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE menu SET sira=sira-1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE menu SET sira=sira+1 WHERE id='".$bbb['id']."'");

	}
	if($_GET['islem'] == "asagi"){
	
$eksilt = $_GET['sira'] + "1";

$sss = mysql_query("SELECT * FROM menu WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE menu SET sira=sira+1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE menu SET sira=sira-1 WHERE id='".$bbb['id']."'");
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
            Ateriat
 <!--           <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br> -->
          
        </header>
        
        <div class="panel-body">
        
          <a href="index.php?page=magaza&git=yeniEkle" class="btn btn-primary btn-lg"> Lisää uusi </a>

        <div class="adv-table">
    
        <table  class="display table table-bordered table-striped" id="dynamic-table">
     
        <thead>
         
        <tr>
        
              <th>Nimi</th>
			    <th>Aktiivinen?</th>
             <th>Vaihtoehdot</th>
        </tr>
        </thead>
        <tbody>
     <?php 
$sql = mysql_query("SELECT * FROM menu ORDER by id desc");
while($cek = mysql_fetch_assoc($sql)){
if($cek['aktif']=='1'){
$aktif='Aktiivinen';
} else {
$aktif='Ei Aktiivinen';
}

?>
<tr class="gradeA">
 
             <td><?=$cek['name']?></td>
			  <td><?=$aktif?></td>
                   <td class="hidden-phone"> 
 

                  <a href="index.php?page=magaza&git=Duzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
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