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

$username = $_POST['username'];
$pwda = $_POST['pwda'];
$pwdb = $_POST['pwdb'];
$sql = "select * from users where username='{$username}'";

//if($username=='root') $remsg='root';
if ($username=='' || $pwda=='' || $pwdb=='') $remsg='用户名或密码输入为空！';
else if($pwda!=$pwdb) $remsg='两次密码输入不匹配！';
else if($coon->query($sql)->num_rows>0) $remsg='用户名已存在。';
//else $remsg='notexists';
else{
    $sql="insert into users values('{$username}','{$pwda}')";
    if($coon->query($sql)==true) $remsg='成功';
    else $remsg='注册失败，';
}
//echo json_encode();
$coon->close();
//echo json_encode($remsg);
echo json_encode($remsg);

?>
