<?
 
mysql_query("UPDATE booktable SET aktif = 1  WHERE id = '".$_GET['id']."'");


$ssql = mysql_query("SELECT * FROM booktable WHERE id = '".$_GET['id']."'");
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
                            <h3 class="panel-title">NÄKYMÄ</h3>
                        </div>
                        <div class="panel-body">

   <div id="tabs">
  
 
             
            <br /> 
 <div class="col-sm-12">
  <label> Nimi:</label>&nbsp;&nbsp;&nbsp;<?=$upcek['name']?> 
</div><br /><br />

 <div class="col-sm-12">
  <label> Päiväys:</label>&nbsp;&nbsp;&nbsp;<?=$upcek['date']?> 
</div><br /><br />

 <div class="col-sm-12">
  <label> Kello:</label>&nbsp;&nbsp;&nbsp;<?=$upcek['time']?> 
</div><br /><br />

<div class="col-sm-12">
  <label> Ihmiset:</label>&nbsp;&nbsp;&nbsp;<?=$upcek['person']?> 
</div><br /><br />

<div class="col-sm-12">
  <label> Puhelin:</label>&nbsp;&nbsp;&nbsp;<?=$upcek['phone']?> 
</div><br /><br />


<div class="col-sm-12">
  <label> Sähköposti:</label>&nbsp;&nbsp;&nbsp;<?=$upcek['email']?> 
</div><br /><br />


<div class="col-sm-12">
  <label> Viestisi:</label>&nbsp;&nbsp;&nbsp;<?=$upcek['message']?> 
</div><br />


 
 
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