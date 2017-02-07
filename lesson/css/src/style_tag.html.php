<?php

$src = <<<EOS
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>CSS入門</title>
  
  <!-- style タグの中にCSSを書く -->
  <style type="text/css">
     h1 { color: red; }
  </style>
</head>

・・・

EOS;

return htmlspecialchars($src);