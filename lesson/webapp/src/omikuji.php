<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おみくじ</title>
  <style type="text/css">
    .unsei {
      font-size: 32px;
      color: red;
    }
  </style>
</head>
<body>
  <h1>おみくじ</h1>
  
  <?php
    // ランダムに運勢を決める
    $unseis = ['大吉', '中吉', '小吉', '末吉', '凶'];
    $key = array_rand($unseis);
    $unsei = $unseis[$key];
  ?>
  <p>あなたの運勢は <span class="unsei"><?= $unsei; ?></span> です</p>
  
  <p>再度、おみくじを引くにはリロードしてください</p>
</body>
</html>
