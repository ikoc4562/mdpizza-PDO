<?
 	
	if($_GET['islem'] == "sil"){
		
		mysql_query("DELETE FROM indirim WHERE id = '".$_GET['aid']."'");
		$mesaj = "Başarıyla Silindi";
				}

if($_GET['islem'] == "yukari"){
	
$eksilt = $_GET['sira'] - "1";

$sss = mysql_query("SELECT * FROM indirim WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE indirim SET sira=sira-1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE indirim SET sira=sira+1 WHERE id='".$bbb['id']."'");

	}
	if($_GET['islem'] == "asagi"){
	
$eksilt = $_GET['sira'] + "1";

$sss = mysql_query("SELECT * FROM indirim WHERE sira = '".$eksilt."'");
$bbb = mysql_fetch_assoc($sss);

mysql_query("UPDATE indirim SET sira=sira+1 WHERE id='".$_GET['aid']."'");
mysql_query("UPDATE indirim SET sira=sira-1 WHERE id='".$bbb['id']."'");
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
            Tarjous
<!--            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span><br> -->
          
        </header>
        
        <div class="panel-body">
        
          <a href="index.php?page=Egitmenler&git=yeniEkle" class="btn btn-primary btn-lg"> Lisää Uusi </a>

        <div class="adv-table">
    
        <table  class="display table table-bordered table-striped" id="dynamic-table">
     
        <thead>
         
        <tr>
                    <th>Nr</th>

              <th>Nimi</th>
             <th>Vaihtoehdot</th>
        </tr>
        </thead>
        <tbody>
     <?php 
	 $i=0;
$sql = mysql_query("SELECT * FROM indirim order by id desc");
while($cek = mysql_fetch_assoc($sql)){
$i++;
?>
<tr class="gradeA">
           <td><?=$i?></td>
             <td><?=$cek['name']?></td>
                   <td class="hidden-phone">			 

                  <a href="index.php?page=Egitmenler&git=Duzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
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