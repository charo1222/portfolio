<?php

$fish = "本マグロ 500g:1000円 千葉県産捕れたて";
$yen = mb_strpos($fish, "円");
$colon = mb_strpos($fish, ":");
print mb_substr($fish, $colon + 1, ($yen - $colon) - 1);

?>