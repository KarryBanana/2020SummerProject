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
$image=$_POST['base'];
$imageName = "25220_".date("His",time())."_".rand(1111,9999).'.png';
//判断是否有逗号 如果有就截取后半部分
if (strstr($image,",")){
    $image = explode(',',$image);
    $image = $image[1];
}
//设置图片保存路径
$path = "var/www/html/static/static";

//判断目录是否存在 不存在就创建
if (!is_dir($path)){
    mkdir($path,0777,true);
}

//图片路径
$imageSrc= $path."/". $imageName;
//$savepath="@/static/".$imageName;
$savepath=$imageName;
$deta=$savepath;
$sql="insert into hppllist values({$hpno},'{$id}','{$titl}','{$deta}',0,0)";
$coon->query($sql);
//生成文件夹和图片
$r = file_put_contents($imageSrc, base64_decode($image));
if (!$r) {
    echo json_encode("fail!");
}else {
    echo json_encode("success!");
    echo $savepath;
}

$coon->close();

?>