<?
@session_start();
$counter = intval(file_get_contents("counter.dat"));  //创建一个dat数据文件
if(!$_SESSION['#'])
{
    $_SESSION['#'] = true;
    $counter++;  //刷新一次+1
    $fp = fopen("counter.dat","w");  //以写入的方式，打开文件，并赋值给变量fp
    fwrite($fp, $counter);   //将变量fp的值+1
    fclose($fp);
}
?>
