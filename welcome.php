欢迎 <?php echo $_GET["fname"]; ?>!<br>
你的年龄是 <?php echo $_GET["age"]; ?>
岁。
<?php
function cs()
{
    $num=$_GET["fname"];
    echo $num;
}
cs();
?>