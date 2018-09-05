<?php

$m1 = "https://cdn.rawgit.com/13utters/MM-Master/ed7aae0f/lala/mm.json";
$m2 = "https://cdn.rawgit.com/13utters/MM-Master/8ebfd549/lala/mm.json";
$m3 = "https://cdn.rawgit.com/13utters/MM-Master/68199e70/lala/mm.json";
$m4 = "https://cdn.rawgit.com/13utters/MM-Master/67c83e80/lala/mm.json";
$m5 = "https://cdn.rawgit.com/13utters/MM-Master/a6378258/lala/mm.json";
$m6 = "https://cdn.rawgit.com/13utters/MM-Master/052d1890/lala/mm.json";

$rm = array($m1, $m2, $m3, $m4, $m5, $m6);
$random_keys = array_rand($rm, 1);
echo $rm[$random_keys];
?>
