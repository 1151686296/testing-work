欢迎 <?php echo $_GET["fname"]; ?>!<br>
你的年龄是 <?php echo $_GET["age"]; ?>
岁。
<?php
function cs()
{
    $num=$_GET["fname"];
    echo $num;
    if($num="许秉灏")
    {
        echo "这是个帅哥";
    }
    else if ($num="张浩楠")
    {
        echo "这是个丑逼";
    }
    else
    {
        echo "还行吧";
    }
}
cs();
?>