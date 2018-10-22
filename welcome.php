欢迎 <?php echo $_GET["fname"]; ?>!<br>
你的年龄是 <?php echo $_GET["age"]; ?>
岁。
<?php

function cs()
{
    $num=$_GET["fname"];
    $xbh="许秉灏";
        $zhn="张浩楠";

    echo $num;
    if($num=$xbh)
    {
        echo "这是个帅哥";
    }
    if($num=$zhn);
    {
        echo "丑逼";
    }
    else
    {
        echo "还行吧";
    }
}
cs();
?>