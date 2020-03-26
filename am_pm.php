<?php
$t = date("G");
if($t < 6 or $t >=18):
?>
<BODY BGCOLOR = gray>夜</BODY>
<?php elseif ($t >= 9):?>
<BODY BGCOLOR = lime>昼</BODY>
<?php elseif ($t >= 6):?>
<BODY BGCOLOR = blue>朝</BODY
<?php endif; ?>