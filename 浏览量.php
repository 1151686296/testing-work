<?php
require_once ('conn.php');
$sql=mysqli_query($conn,"select * from 浏览次数 where 网站='精宏首页'");
$info=mysqli_fetch_array($sql);
$number=$info["次数"];
$number=$number +1;
echo $number;
require_once ('conn.php');
mysqli_query($conn,"update 浏览次数 set 次数='$number'where 网站='精宏首页'");
