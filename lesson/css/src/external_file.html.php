<?php

$src = <<<EOS
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>CSS入門</title>
  
  <!-- 外部のCSSファイルを読み込む -->
  <link rel="stylesheet" href="css/site.css">
</head>

・・・

EOS;

return htmlspecialchars($src);