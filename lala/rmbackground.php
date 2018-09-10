<?php
header('Access-Control-Allow-Origin: https://plug.dj'); 
header('Content-Type: text/json'); 
$m1 = "https://cdn.radiant.dj/rcs/bg/2k14tc.jpg";
$m2 = "https://cdn.radiant.dj/rcs/bg/2k14hw.jpg";
$m3 = "https://cdn.radiant.dj/rcs/bg/2k14tiki.jpg";
$m4 = "https://cdn.radiant.dj/rcs/bg/2k14worldonfire.jpg";
$m5 = "https://cdn.radiant.dj/rcs/bg/5.png";
$m6 = "https://cdn.radiant.dj/rcs/bg/7.png";
$rm = array($m1, $m2, $m3, $m4, $m5, $m6);
$random_keys = array_rand($rm, 1);
echo $rm[$random_keys];
?>
