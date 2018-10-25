<html>
<head>
    <meta charset="UTF-8">
    <title>123</title>
</head>
<form method="post" action="反馈数据库.php">
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