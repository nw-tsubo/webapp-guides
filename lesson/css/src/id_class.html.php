<?php

$src = <<<EOS
<div id="id_name">
    ・・・
</div>

<p class="class_name">
    ・・・
</p>

EOS;

return htmlspecialchars($src);