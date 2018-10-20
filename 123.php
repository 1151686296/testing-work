<?php

function xbh()
{
    static $num =0;
    $num --;
    echo $num;
echo "<br/>";
}
xbh();
xbh();
xbh();