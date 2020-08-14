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

$op = $_POST['op'];
if($op==1){
    $sql = "select hpno,url,title from hplist where hpno<500";
    $result=($coon->query($sql))->fetch_all();
    $remsg=$result;
}
elseif ($op==2){
    $hpno=$_POST['hpno'];
    $sql="select id,titl,deta,up,down from hppllist where hpno={$hpno}";
    $result=($coon->query($sql))->fetch_all();
    $remsg=$result;
}
elseif ($op==3){
    $hpno=$_POST['hpno'];
    $id=$_POST['id'];
    $titl=$_POST['titl'];
    $deta=$_POST['deta'];
    if($titl=='') $remsg="标题不能为空！";
    else{
        $sql="insert into hppllist values({$hpno},'{$id}','{$titl}','{$deta}',0,0)";
        if($coon->query($sql)) $remsg="发表成功！";
        else $remsg="发表失败，请重试。";
    }
}
elseif($op==4){
    $hpno=$_POST['hpno'];
    $sql="select title,deta from hplist where hpno={$hpno}";
    $result=($coon->query($sql))->fetch_array();
    $remsg=$result;
}

$coon->close();
echo json_encode($remsg)

?>