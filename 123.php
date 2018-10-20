<?php
$x=5;
$y=10;
function xbhzs()
{
    global $x,$y;
    $y=$x+$y;
}
xbhzs();
echo $y;
