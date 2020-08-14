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

$hpno=$_POST['hpno'];
$id=$_POST['id'];
$titl=$_POST['titl'];
$deta=$_POST['deta'];

$sql="select up,down from hppllist where hpno={$hpno} and id='{$id}' and titl='{$titl}' and deta='{$deta}'";
$result=($coon->query($sql))->fetch_array();
$remsg=$result;

$coon->close();
echo json_encode($remsg);

?>