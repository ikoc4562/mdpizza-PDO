
	<?php
include('conn.php');

	if(!empty($_POST['ispost'])){
		
	require_once("mailphp/gonder.php");
		



									$stmt=$conn->prepare("insert into booktable(name,email,phone,date,time,person,message) values(?,?,?,?,?,?,?)");
									$stmt=$conn->query('SET CHARACTER SET utf8');
									$stmt->execute([$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['date'],$_POST['time'],$_POST['people'],$_POST['message']]);
	
									
	}
	?>



<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MD Kebab-Pizzeria</title>
  <meta name="description" content="fmkoc.com">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <meta http-equiv="Refresh" content="2; url=etusivi" />

  <!-- =======================================================

  ======================================================= -->
<style>
div {
  margin-bottom: 15px;
  padding: 4px 12px;
}


.success {
  background-color: #ddffdd;
  border-left: 6px solid #4CAF50;
}
	.danger {
  background-color: #ffdddd;
  border-left: 6px solid #f44336;
}


</style>	
</head>

<body onLoad="">


	<?php
	if(!empty($_POST['ispost'])){
		


									$stmt=$conn->prepare("insert into booktable(name,email,phone,date,time,person,message) values(?,?,?,?,?,?,?)");
									$stmt->execute([$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['date'],$_POST['time'],$_POST['people'],$_POST['message']]);
									
	}
	?>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">About</a>
            <a href="#event">Event</a>
            <a href="#menu-list">Menu</a>
            <a href="#contact">Book a table</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center" style=" opacity: 0.3">
            <h1 class="logo-name">MD  MEMORY-DREAMS</h1>
            <h2> Kebab & Pizzeria</h2>
          </div>
			  				<div align="center" style="margin-top: -110px">
  <img src="img/ms.png" width="60%px">
</div>
        </div>
      </div>
    </div>
  </section>
 

</body>

</html>
