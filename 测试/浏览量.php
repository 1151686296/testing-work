复制代码
<?php
@session_start();
$counter = intval(file_get_contents("counter.dat"));
if(!$_SESSION['#'])
{
    $_SESSION['#'] = true;
    $counter++;
    $fp = fopen("counter.dat","w");
    fwrite($fp, $counter);
    fclose($fp);
}
?>
<p align="center">您是到访的第<?php echo "$counter";?>位用户</p>