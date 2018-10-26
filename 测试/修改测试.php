<html>
<head>
    <meta charset="UTF-8">
    <title>123</title>
</head>
<form method="post" action="反馈数据库.php">
    <?php
    $fromurl="http://119.23.18.102/%E7%99%BB%E9%99%86%E9%A1%B5%E9%9D%A2/"; //跳转往这个地址。
    if( $_SERVER['HTTP_REFERER'] == "http://119.23.18.102/%E6%B5%8B%E8%AF%95/%E4%BF%AE%E6%94%B9%E6%B5%8B%E8%AF%95.php" )
    {
    header("Location:".$fromurl); exit;
    }
    ?>
<?php
require_once ('conn.php');
?>
<?php
$sql=mysqli_query($conn,"select * from 修改内容 where id=1");
$info=mysqli_fetch_array($sql);
?>
<input type="text" size="100" name="1" value="<?php echo $info["内容"]; ?>">
    <input type="submit" value="提交">
</form>
</html>