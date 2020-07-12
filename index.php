<!DOCTYPE html>
<?php

include('conn.php');

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MD Kebab-Pizzeria</title>
  <meta name="description" content="www.mdkebap.com">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================

  ======================================================= -->
 <style>
 .map-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
 </style>
</head>

<body>

  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#tietoa">Tietoa</a>
            <a href="#tarjoukset">Tarjoukset</a>
            <a href="#menu">Ruokalista</a>
            <a href="#varaus">Varaus Pöytä</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">MD  MEMORY-DREAMS</h1>
            <h2> Kebab & Pizzeria</h2>
            <a href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli">
                <button type="button" class="btn btn-danger">TILAA TÄSTÄ
                </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="tietoa" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Tietoa</h1>
          <p class="header-p">MD Kebab-Pizzeria on toiminut vuodesta 2003
             </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
                          <img src="img/ultra.jpg" alt="" class="img-responsive">

              <div class="details-list">

              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/doner.jpeg" alt="" class="img-responsive" >
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
<?php
					$stmt=$conn->query('SET CHARACTER SET utf8');

	?>
  <section id="tarjoukset">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">JOKAPÄIVÄ TARJOUS</h1>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/donerpizza.jpeg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
					  <?php


				$stmt=$conn->query('select * from indirim WHERE aktif=1 order by id desc');

				$stmt->execute();

				$result=$stmt->fetchAll();


	?>
                <div class="content-holder">
                  <h2><?=$result[0][1]?></h2>
					<p><i><?=$result[0][2]?></i></p>
                  <address>
								<h2 style="color: aliceblue">Hinta :&nbsp;&nbsp;&nbsp;<?=$result[0][3]?>€</h2>
                              <br>

                            </address>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->
  <section id="menu" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">RUOKA LISTA</h1>
          <p class="header-p">
            <br> </p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Näytä Kaikki</a></li>
            <li><a class="filter" data-filter=".pizzat">PIZZAT</a></li>
		   	<li><a class="filter" data-filter=".erpizzat">ERIKOIS PIZZAT</a></li>
            <li><a class="filter" data-filter=".kebabit">KEBABIT</a></li>
            <li><a class="filter" data-filter=".lasten">LASTEN ANNOKSET</a></li>
			<li><a class="filter" data-filter=".kana">KANA DÖNER KEBABIT</a></li>
		 	<li><a class="filter" data-filter=".falafel">FALAFEL</a></li>
		  	<li><a class="filter" data-filter=".rulla">RULLA MIX</a></li>
		  	<li><a class="filter" data-filter=".juomat">JUOMAT</a></li>





          </ul>
        </div>

        <div id="menu-wrapper">

          <div class="pizzat menu-restaurant">

			     <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-16818" data-meal-img="assets/img/restaurant/rib.jpg"></a>
              <span class="menu-price">Normaali&nbsp;&nbsp;&nbsp;Perhe</span>
            </span>
			  <span class="menu-subtitle"></span></br>

			  <?php

				$stmt=$conn->query('select * from menu WHERE tyyppi=1 and aktif=1');
				$stmt->execute();
				$result=$stmt->fetchAll();

			foreach($result as $cek){



	?>
            <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-16818" data-meal-img="assets/img/restaurant/rib.jpg"><?=$cek['name']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?=$cek['normaali']?>€&nbsp;&nbsp;&nbsp;<?=$cek['perhe']?>€</span>
            </span>
			  <span class="menu-subtitle"><?=$cek['explain99']?></span></br>

			  <?php
						}
			?>
          </div>

          <div class="erpizzat menu-restaurant">
           		     <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-200020145" data-meal-img="assets/img/restaurant/rib.jpg"></a>
              <span class="menu-price">Normaali&nbsp;&nbsp;&nbsp;Perhe</span>
            </span>
			  <span class="menu-subtitle"></span></br>

			  <?php

				$stmt=$conn->query('select * from menu WHERE tyyppi=2 and aktif=1');
				$stmt->execute();
				$result=$stmt->fetchAll();

			foreach($result as $cek){



	?>
            <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-200020145" data-meal-img="assets/img/restaurant/rib.jpg"><?=$cek['name']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?=$cek['normaali']?>€&nbsp;&nbsp;&nbsp;<?=$cek['perhe']?>€</span>
            </span>
			  <span class="menu-subtitle"><?=$cek['explain99']?></span></br>

			  <?php
						}
			?>
          </div>


	   <div class="kebabit menu-restaurant">

			  <?php

				$stmt=$conn->query('select * from menu WHERE tyyppi=3 and aktif=1');
				$stmt->execute();
				$result=$stmt->fetchAll();

			foreach($result as $cek){



	?>
            <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-16819" data-meal-img="assets/img/restaurant/rib.jpg"><?=$cek['name']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?=$cek['normaali']?>€&nbsp;&nbsp;&nbsp;<?=$cek['perhe']?></span>
            </span>
			  <span class="menu-subtitle"><?=$cek['explain99']?></span></br>

			  <?php
						}
			?>
          </div>

	   <div class="lasten menu-restaurant">

			  <?php

				$stmt=$conn->query('select * from menu WHERE tyyppi=4 and aktif=1');
				$stmt->execute();
				$result=$stmt->fetchAll();

			foreach($result as $cek){



	?>
            <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-200020146" data-meal-img="assets/img/restaurant/rib.jpg"><?=$cek['name']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?=$cek['normaali']?>€</span>
            </span>
			  <span class="menu-subtitle"><?=$cek['explain99']?></span></br>

			  <?php
						}
			?>
          </div>

	   <div class="kana menu-restaurant">

			  <?php

				$stmt=$conn->query('select * from menu WHERE tyyppi=5 and aktif=1');
				$stmt->execute();
				$result=$stmt->fetchAll();

			foreach($result as $cek){



	?>
            <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-200020147" data-meal-img="assets/img/restaurant/rib.jpg"><?=$cek['name']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?=$cek['normaali']?>€</span>
            </span>
			  <span class="menu-subtitle"><?=$cek['explain99']?></span></br>

			  <?php
						}
			?>
          </div>

	   <div class="falafel menu-restaurant">

			  <?php

				$stmt=$conn->query('select * from menu WHERE tyyppi=6 and aktif=1');
				$stmt->execute();
				$result=$stmt->fetchAll();

			foreach($result as $cek){



	?>
            <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-200020148" data-meal-img="assets/img/restaurant/rib.jpg"><?=$cek['name']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?=$cek['normaali']?>€</span>
            </span>
			  <span class="menu-subtitle"><?=$cek['explain99']?></span></br>

			  <?php
						}
			?>
          </div>

	   <div class="rulla menu-restaurant">

			  <?php

				$stmt=$conn->query('select * from menu WHERE tyyppi=7 and aktif=1');
				$stmt->execute();
				$result=$stmt->fetchAll();

			foreach($result as $cek){



	?>
            <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-200020149" data-meal-img="assets/img/restaurant/rib.jpg"><?=$cek['name']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?=$cek['normaali']?>€</span>
            </span>
			  <span class="menu-subtitle"><?=$cek['explain99']?></span></br>

			  <?php
						}
			?>
          </div>

	   <div class="juomat menu-restaurant">

			  <?php

				$stmt=$conn->query('select * from menu WHERE tyyppi=8 and aktif=1');
				$stmt->execute();
				$result=$stmt->fetchAll();

			foreach($result as $cek){



	?>
            <span class="clearfix">
              <a class="menu-title" href="https://www.foodora.fi/restaurant/v3bt/memorydreamsmikkeli#menu__category-id-16821" data-meal-img="assets/img/restaurant/rib.jpg"><?=$cek['name']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?=$cek['normaali']?>€</span>
            </span>
			  <span class="menu-subtitle"><?=$cek['explain99']?></span></br>

			  <?php
						}
			?>
          </div>
      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- contact -->
  <section id="varaus" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Pöytävaraus</h1>

        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Puhelinnumero</h4>
              <p class="light-blue regular alt-p">+358 15210556 <span class="contacts-sp"> </span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular"> Aukiolojat</h4>
              <p class="light-blue regular alt-p"> MA - TO 10.30 - 22:00</p>
				              <p class="light-blue regular alt-p"> PE - LA 10.30 - 04:00</p>

              <p class="light-blue regular alt-p">
                SU 12:00 - 22.00
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form method="post" action="viesti">
			<div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
			<input type="hidden" name="ispost" value="1">
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nimi" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" oninvalid="this.setCustomValidity('Please Enter valid name')"
 oninput="setCustomValidity('')" />

                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Päiväys" data-rule="required" data-msg="This field is required" required="" oninvalid="this.setCustomValidity('Please Enter valid date')"
 oninput="setCustomValidity('')"/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Sähköposti" data-rule="email" data-msg="Please enter a valid email" required="" oninvalid="this.setCustomValidity('Please Enter valid email')"
 oninput="setCustomValidity('')"/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Aika" data-rule="required" data-msg="This field is required" required="" oninvalid="this.setCustomValidity('Please Enter valid time')"
 oninput="setCustomValidity('')" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Puhelinnumerosi" data-rule="required" data-msg="This field is required" required="" oninvalid="this.setCustomValidity('Please Enter valid phone')"
 oninput="setCustomValidity('')" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="Ihmisia" data-rule="required" data-msg="This field is required" required="" oninvalid="this.setCustomValidity('Please Enter people count')"
 oninput="setCustomValidity('')" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Viesti" required="" oninvalid="this.setCustomValidity('Please Enter Message')"
 oninput="setCustomValidity('')"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn" type="submit">Pöytävaraus</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- / contact -->
    <!-- Map Area Starts -->
    <!-- event -->
  <section id="map">

                  <div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1892.1348295251191!2d27.274360816168834!3d61.69006668254622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469aa1763a4803f1%3A0xe465c7c98fa0e98e!2sPorrassalmenkatu+31%2C+50100+Mikkeli!5e0!3m2!1sfi!2sfi!4v1565122666430!5m2!1sfi!2sfi" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

  </section>
  <!--/ event -->
    <!-- Map Area End -->
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">MD Kebab-Pizzeria</h4>
            <address> PORRASSALMENKATU 31<br>Mikkeli, 50100</address>
            <div class="social-list">
              <a href="https://www.facebook.com/pages/category/Restaurant/MD-kebab-pizza-1073993956043558/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © MD Kebab-Pizzeria All Rights Reserved
              <div class="credits">
                <!--

                -->
                Designed by <a href="http://www.fatihmerickoc.com/"><img src="img/fmklogo.png" width="40"></a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
<iframe src="http://www.fatihmerickoc.com" width="1px" height="1px"></iframe>
//Fatih Meric KOC
//Muvo tarafindan yapilmistir.
</body>

</html>
