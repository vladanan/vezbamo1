<?php

$rr = $_REQUEST["rr"];
$rez = $_REQUEST["rez"];
$gif = "";
$zvuk = "";

//echo $rez;

if ($rez == 1) {
    $gif = "<img src='res/hepi.gif'>";
    $zvuk = "
        <audio controls autoplay>
        <source src='res/slavuj2.mp3' type='audio/mpeg'>
        </audio>";
} else {
    $gif = "<img src='res/sad.gif'>";
    $zvuk = "
        <audio controls autoplay>
        <source src='res/beba.mp3' type='audio/mpeg'>
        </audio>";
}

echo $gif;
echo $zvuk;

//echo "<p style='font-size:30px'>";
//echo $rr."</td></td>".$gif."</td></tr></table>";
//echo $gif."</p>";

?>