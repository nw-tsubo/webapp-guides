<?php

$src = <<<EOS
/* HTMLタグを使用した例 */
h1 {
  ...
}

/* idを使用した例（'#'で始めます） */
/* idはページ内でユニークに１箇所を示すものです */
#id_name {
  ...
}

/* classを使用した例（'.'で始めます） */
/* classはページ内で複数に指定できます */
.class_name {
  ...
}


EOS;

return htmlspecialchars($src);