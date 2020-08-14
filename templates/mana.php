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
$username=$_POST['username'];
if($op==1) $sql="update hplist set isde=1 where hpno={$hpno}";
elseif ($op==2) $sql="update hplist set iszd=1 where hpno={$hpno}";
elseif ($op==3) $sql="update hplist set isjh=1 where hpno={$hpno}";
if($coon->query($sql)) $remsg='操作成功！';
else $remsg='操作失败！';


$coon->close();
?>
