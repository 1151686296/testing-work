<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
$text=$_POST["1"];
include ("conn.php");
mysqli_query($conn,"update 修改内容 set 内容='$text' where id= '1'");
echo "<script>alert('修改成功');history.back();</script>";
?>