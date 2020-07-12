<?php
error_reporting(0);
require_once('lib/MysqliDb.php');

$localhost		="94.73.147.210";
$dbuser			="u8648962_uspizza";
$dbsifre		="OUii09I4";
$dbadi			="u8648962_vtpizza";
$seourl			="1";


$db = new MysqliDb($localhost, $dbuser, $dbsifre, $dbadi);
$randomsayi = strtoupper(substr(uniqid(md5(rand())), 0,8));


$baglan = mysql_connect($localhost,$dbuser,$dbsifre);
if(!$baglan) die ("Mysql Ba?lant?s? Sa?lanamad?");

mysql_select_db($dbadi,$baglan) or die("VER? TABANI BA?LANTISI BA?ARISIZ");
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION='utf8_general_ci'");

$kull = $_COOKIE["kull"];

?>