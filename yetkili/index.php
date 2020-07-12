<?php
ob_start();
include("aktarimlar.php");
 
if(empty($_COOKIE[kullanici])){

include("tema/anatol/login.php");	
	
}else{
///echo $tools->dosya("tema/anatol",'<li class="23">','</li>');
include("tema/anatol/index.php");
 }
 
?>