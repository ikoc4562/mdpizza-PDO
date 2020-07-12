<?php 
	
	$uyelerc = new veriTabani();
	
	$uyelerc -> tabloadi="uyeler";
	
	 $userAdi = $uyelerc->thisVeri("eposta",$_COOKIE[kullanici],"adsoyad"); 
	 
	 if ($_GET['cikis'] == "yap"){
		 
	session_destroy ();
	header("Location:http://www.mdpizzeriakebap.com");
	 }
?>


<div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start-->
    
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
          <?php
		  $msj = mysql_query("SELECT * FROM booktable WHERE aktif = '".strip_tags(mysql_escape_string('0'))."' order by id DESC");
		$msjcek = mysql_fetch_assoc($msj);
		$toplammsj  = mysql_num_rows($msj);
	?>
                <li>
                    <a href="index.php?page=sayfalar&id=78" class="btn btn-default dropdown-toggle info-number">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge"><?=$toplammsj?></span>
                    </a>
                 </li>
                 
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
                     <?=$userAdi; ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="index.php?cikis=yap" class="cikis"><i class="fa fa-sign-out"></i> Çıkış</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

        </div>
        
     
<?php 
$adminclass = new adminSayfa();
include 'tema/anatol/pageheader.php';
?>

