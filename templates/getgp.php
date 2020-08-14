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
if($op==1){
    $usernm=$_POST['username'];
    $sql="select gpno,name,short from grouplist where gpno in (select gpno from joinlist where username='{$usernm}')";
    $result=($coon->query($sql))->fetch_all();
    $remsg=$result;
}
elseif ($op==2){
    $usernm=$_POST['username'];
    $sql="select gpno from joinlist where username='{$usernm}'";
    $result=($coon->query($sql))->fetch_all();
    //echo json_encode($result);
    $i=0;
    $toresult=[];
    foreach ($result as $r){
        $sql="select * from hplist where isde=0 and hpno in (select hpno from grouppost where gpno={$r[0]}) order by iszd desc ";
        //echo json_encode($coon->query($sql));
        $nowresult=($coon->query($sql))->fetch_all();
        array_push($toresult,$nowresult);
    }
    $remsg=$toresult;
}
elseif ($op==3){
    $usernm=$_POST['username'];
    $sql="select * from grouplist where gpno in (select gpno from joinlist where username='{$usernm}')";
    $result=($coon->query($sql))->fetch_all();
    $remsg=$result;
}

$coon->close();
echo json_encode($remsg);

?>
