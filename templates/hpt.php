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
$username=$_POST['username'];
$ist=$_POST['ist'];
$sql="select count(*) from tlist where hpno={$hpno} and id='{$id}' and titl='{$titl}' and deta='{$deta}' and username='{$username}'";
$result=($coon->query($sql))->fetch_array();
//echo json_encode($result[0]==0);
if($result[0]==0) $sql="insert into tlist values({$hpno},'{$id}','{$titl}','{$deta}','{$username}',{$ist})";
else $sql="update tlist set ist={$ist} where hpno={$hpno} and id='{$id}' and titl='{$titl}' and deta='{$deta}' and username='{$username}'";
$coon->query($sql);
$up_num=0;
$sql="select count(*) from tlist where hpno={$hpno} and id='{$id}' and titl='{$titl}' and deta='{$deta}' and ist=1";
$up_num=(($coon->query($sql))->fetch_array())[0];
//echo json_encode($up_num);
$sql="update hppllist set up={$up_num} where hpno={$hpno} and id='{$id}' and titl='{$titl}' and deta='{$deta}'";
$coon->query($sql);
//echo json_encode($result);
$coon->close();

?>