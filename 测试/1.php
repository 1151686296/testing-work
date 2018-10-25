<?php
require_once ('conn.php');
?>
<?php
$sql=mysqli_query($conn,"select * from 修改内容 where id=1");
$info=mysqli_fetch_array($sql);
?>
<?php
echo $info["内容"];
?>