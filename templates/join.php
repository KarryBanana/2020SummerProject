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
$sql="select count(*) from joinlist where gpno={$gpno} and username='{$username}'";
//echo json_encode($gpno);
//$sql="select count(*) from joinlist where gpno={$gpno}";
$result=($coon->query($sql))->fetch_array();
if($result[0]>0) $remsg='您已加入该小组！';
else{
    $sql="insert into joinlist values({$gpno},'{$username}')";
    $coon->query($sql);
    $remsg='加入成功！';
}
$coon->close();
echo json_encode($remsg);

?>