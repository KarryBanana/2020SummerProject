<?php
header("Content-Type: text/html; charset=UTF-8");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE');
$servername='localhost';
$sqlname='root';
$sqlpwd='666666';
$dbname='userlist';
$remsg='';

$coon=mysqli_connect($servername,$sqlname,$sqlpwd,$dbname);
$op=$_POST['op'];
$hpno=$_POST['hpno'];
if($op==1) $sql="select url,webstie,imdb,rough,name,director,author,actor,type,country,year,lang,length,short from movielist where hpno={$hpno}";
elseif ($op==2) $sql="select url,name,publisher,pages,author,price,isbn,year,short from booklist where hpno={$hpno}";

$result=($coon->query($sql))->fetch_array();
$remsg=$result;

echo json_encode($remsg);
$coon->close();
?>