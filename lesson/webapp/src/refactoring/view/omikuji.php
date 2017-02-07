<!doctype html>
<!--
このファイルは表示に徹する
-->

<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>New おみくじ</title>
  <style type="text/css">
    .unsei {
      font-size: 32px;
      color: red;
    }
  </style>
</head>
<body>
  <h1>New おみくじ</h1>
  
  <p>あなたの運勢は <span class="unsei"><?= $data['unsei']; ?></span> です</p>
  
  <p>再度、おみくじを引くにはリロードしてください</p>
</body>
</html>
