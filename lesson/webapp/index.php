<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Web アプリケーション入門</title>

  <!-- highlight.js -->
  <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/github.min.css">-->
  <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/agate.min.css">-->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/railscasts.min.css">
  <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/dracula.min.css">-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  
  <link rel="stylesheet" href="/css/site.css?<?= str_shuffle('abcedefg1234567890'); ?>">
</head>

<body>
  <div id="wrapper">
    <h1>Web アプリケーション入門</h1>
    
    <secton>
      <h2>Web の仕組み</h2>
      
      <div class="center">
        <img src="img/www.png" style="width:100%"></img>
      </div>
      <p>WWW ブラウザからのリクエストに対して、WWW サーバはレスポンスを返します。主なレスポンスは HTML です。</p>
    </secton>
    
    <secton>
      <h2>Web アプリケーションとは</h2>
      <div class="center">
        <img src="img/webapp.png" style="width:100%"></img>
      </div>
      <p>WWW ブラウザからのリクエストに対して、プログラムが処理を実行し、HTML を生成して返します。</p>
    </secton>
    
    <secton>
      <h2>PHP を使った Web アプリケーション</h2>
      
      <h3>時報サービスを作る</h3>
      <a href="src/clock.php">時報サービス</a>
      <pre><code>
<?= htmlspecialchars(file_get_contents('src/clock.php')); ?>
      </code></pre>
      <a href="http://php.net/manual/ja/function.date.php">date 関数</a>
      
      <h3>PHP の特徴</h3>
      <p>※ ソースコードのコメントに注目してください</p>
      <pre><code>
<?= htmlspecialchars(file_get_contents('src/php_desc.php')); ?>
      </code></pre>
    </section>
    
    <section id="exercise">
      <h2>やってみよう</h2>
      
      <h3>おみくじアプリ</h3>
      <p>上記の時報サービスを参考におみくじアプリを作ってみよう</p>
      <a href="src/omikuji.php">おみくじアプリ</a>
      <pre><code>
<?= htmlspecialchars(file_get_contents('src/hints.php')); ?>
      </code></pre>
      <a href="http://php.net/manual/ja/function.array-rand.php">array_rand 関数</a>

      <h3>回答</h3>
      <p>回答は以下のファイルを御覧ください</p>
      <pre class="code">
lesson/webapp/src/omikuji.php
</pre>
    </section>
    
    <secton>
      <h2>リファクタリング</h2>
      
      <p>おみくじアプリのロジックと表示部分を分けて体質改善を行う</p>
      
      <a href="src/refactoring/omikuji.php">リファクタリング後のおみくじアプリ</a>
      
      <p>修正内容は以下のファイルを御覧ください</p>
      <pre class="code">
lesson/webapp/src/refactoring/
├── model
│     └── Unsei.php
├── view
│     └── omikuji.php
└── omikuji.php
</pre>

    </secton>
    
    <section>
      <h2>参考ページ</h2>
      <ul>
        <li><a href="http://php.net/manual/ja/">PHP 公式サイト</a></li>
        <li><a href="https://prog-8.com/languages/php">Progate - PHP</a></li>
        <li><a href="http://dotinstall.com/lessons/basic_php_v2">ドットインストール - PHP入門</a></li>
        <li><a href="http://www.w3schools.com/php/">PHP 5 Tutorial</a></li>
      </ul>
    </section>
  </div><!-- #wrapper-->
</body>
</html>
