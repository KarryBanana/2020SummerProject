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
$gpno=$_POST['gpno'];
$username=$_POST['username'];
$sql="select count(*) from groupmanage where gpno={$gpno} and username='{$username}'";
$result=($coon->query($sql))->fetch_array();
if($result[0]>0) $remsg=1;
else $remsg=0;
$coon->close();
echo json_encode($remsg);

?>