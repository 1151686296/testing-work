欢迎 <?php echo $_GET["fname"]; ?>!<br>
你的年龄是 <?php echo $_GET["age"]; ?>
岁。
<?php
function cs()
{
    $num=$_GET["fname"];
    $xbh="许秉灏";


    echo $num;
    if($num==$xbh)
    {
        echo "这是个帅哥";
    }
else
    {
        echo "丑逼";
    }
}
cs();
?>