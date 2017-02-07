<?php

$src = <<<EOS
h1 {
  color: #008000; /* color プロパティ（文字色）を緑にする */
}

EOS;

return htmlspecialchars($src);