<html>
<head>
    <meta charset="UTF-8">
    <title>123</title>
</head>
<form method="post" action="反馈数据库.php">
    <?php

    if($_SERVER['HTTP_REFERER'] == "119.23.18.102/测试/修改测试.php"){
        echo "<script>alert('本系统不允许从地址栏访问');</script>";
        echo "<script>window.close();</script>";
        exit;

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