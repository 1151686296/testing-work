欢迎 <?php echo $_GET["fname"]; ?>!<br>
你的年龄是 <?php echo $_GET["age"]; ?>
岁。
<?php
if ($_GET["fname"]=许秉灏)
{
    echo 他是个帅哥;
}
else if ($_GET["fname"]=张浩楠)
{
    echo 这是个丑逼;
}
else
{
    echo 还可以吧;
}