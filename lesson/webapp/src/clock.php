<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>時報サービス</title>
  <style type="text/css">
    .time { font-size: 32px; }
  </style>
</head>
<body>
  <h1>時報サービス</h1>
  
  <p>
    只今の時刻は 
    <span class="time">
      <!-- ここが PHP のプログラム -->
      <?= date('H:i:s'); ?>
    </span> 
    です
  </p>
  
  <p>時刻を最新にするにはリロードしてください</p>
</body>
</html>
