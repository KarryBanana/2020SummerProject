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

$opnum=$_POST['opnum'];
if($opnum==1){
    $sql="select count(*) from '{$dbname}'";
    $result=($coon->query($sql))->fetch_array();
    foreach ($result as $k){
        $reviewno=$k;
    };
    $username=$_POST['username'];
    $obname=$_POST['obname'];
    $reviewyear=$_POST['reviewyear'];
    $reviewmonth=$_POST['reviewmonth'];
    $reviewday=$_POST['reviewday'];
    $reviewtext=$_POST['reviewtext'];
    $reviewtime=$reviewyear."-".$reviewmonth."-".$reviewday;
    $sql="insert into '{$dbname}' values({$reviewno},'{$username}','{$reviewtime}',0,'{$obname}','{$reviewtext}',0,0)";
    if($coon->query($sql)==true) $remsg='评论成功！';
    else $remsg='评论失败，请重试。';
}
elseif ($opnum==2){
    $usernmae=$_POST['usernmae'];
    $sql="select count(*) from '{$dbname}'";
    $result=($coon->query($sql))->fetch_array();
    foreach ($result as $k){
        $reviewnum=$k;
    }
    $remsg=$reviewnum;
}
elseif ($opnum==3){
    $obnmae=$_POST['obnmae'];
    $sql="select count(*) from '{$dbname}'";
    $result=($coon->query($sql))->fetch_array();
    foreach ($result as $k){
        $reviewnum=$k;
    }
    $remsg=$reviewnum;
}
elseif ($opnum==4){
    $usernmae=$_POST['usernmae'];
    $sql="select time,like,ob,text from '{$dbname}' where username='{$username}'";
    $result=($coon->query($sql))->fetch_array();
    $remsg=$result;
}
elseif ($opnum==5){
    $obname=$_POST['obnmae'];
    $sql="select time,like,ob,text from '{$dbname}' where obname='{$obname}'";
    $result=($coon->query($sql))->fetch_array();
    $remsg=$result;
}
//echo json_encode();
$coon->close();
//echo json_encode($remsg);
echo json_encode($remsg);

?>
<?php
