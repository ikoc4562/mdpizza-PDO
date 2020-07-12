<?
 	
	if($_GET['islem'] == "sil"){
		
		mysql_query("DELETE FROM uyeler WHERE id = '".$_GET['aid']."'");
		$mesaj = "Başarıyla Silindi";
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
           E-Posta Grubu Onaylı Üyeler
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
                    <th>Id</th>

              <th>E-Posta Adresi</th>
              <th>Seçenekler</th>
        </tr>
        </thead>
        <tbody>
<?php 
$sql = mysql_query("SELECT * FROM uyeler");
while($cek = mysql_fetch_assoc($sql)){

?>
<tr class="gradeA">
           <td><?=$cek['id']?></td>
             <td><?=$cek['eposta']?></td>
			        <td class="hidden-phone"> 
                   
 				  <a href="index.php?page=uyeler&git=Duzenle&id=<?=$cek['id']?>" title="Düzenle" class="btn btn-default active">   <i class="fa fa-gear"></i></a>
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