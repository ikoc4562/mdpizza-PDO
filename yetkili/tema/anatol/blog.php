<div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.php"><img src="tema/anatol/images/logo.png" alt=""></a>
			</br>
        </div>

        <div class="logo-icon text-center">
            <a href="index.php"><img src="images/logo_icon.png" alt=""></a>
			</br>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <div class="media-body">
                        <h4><a href="#">Yönetici</a></h4>
                        <span>"Hoş Geldin..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Çıkış</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
			</br>
</br>
            <ul class="nav nav-pills nav-stacked custom-nav">
               
               <?php  
               
               		$adminsayfa = new adminSayfa();
               		$adminsayfa->adminKategoriMenu();
               ?>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>


  <div class="main-content" >

  <?php 
        include("header.php");
  ?>  
