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
$pwd = $_POST['pwd'];
$sql = "select * from users where username='{$username}'";

//if($username=='root') $remsg='root';
if ($username=='' || $pwd=='') $remsg='用户名或密码输入为空！';
else if($coon->query($sql)->num_rows==0) $remsg='用户不存在。';
else{
    $sql="select password from users where username='{$username}'";
    $result=$coon->query($sql);
    $arr=$result->fetch_all();
    $str='';//定义一个空变量
    foreach($arr as $k=>$v){//遍历查询的数据
        $str.=implode('',$v).'';//用逗号把每个数组元素分隔开，再用逗号串联起来
    }
    //$remsg=$str;
    if($str==$pwd) $remsg='成功';
    else $remsg='密码错误，';
}
//echo json_encode();
$coon->close();
//echo json_encode($remsg);
echo json_encode($remsg);

?>
<?php
