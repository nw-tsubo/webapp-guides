<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Web App フレームワーク入門</title>

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
    <h1>Web App フレームワーク入門</h1>
    
    <secton>
      <h2>MVC フレームワーク</h2>
      
      <div class="center">
        <img src="https://laravel10.files.wordpress.com/2015/03/laravel_mvc2.png" style="width:100%"></img>
      </div>
      <p>
        Web アプリケーション入門の最後で、おみくじアプリケーションをリファクタリングしました。
        下記のようにモデル、ビュー、コントローラーに分けてプログラミングする方法を MVC パターンと言います。
      </p>
        
      <ul>
        <li>モデル（ビジネスロジック層）</li>
        <li>ビュー（プレゼンテーション層）</li>
        <li>コントローラー（アプリケーション層）</li>
      </ul>
        
      <p>
        また、Web アプリケーションで必ず必要となるパーツやベストプラクティスを盛り込んだ雛形をフレームワークと言います。
        Web アプリケーションは通常全てを１から開発することはなく、フレームワークをベースにして開発します。
      </p>
    </secton>
    
    <secton>
      <h2>代表的なフレームワーク</h2>
      <ul>
        <li><a href="http://rubyonrails.org/">Ruby on Rails (Ruby)</a></li>
        <li><a href="https://laravel.com/">Laravel (PHP)</a></li>
        <li><a href="https://symfony.com/">Symfony (PHP)</a></li>
        <li><a href="https://cakephp.org/jp">CakePHP (PHP)</a></li>
        <li><a href="https://www.slimframework.com/">Slim (PHP)</a></li>
      </ul>
    </secton>
    
    <section id="description">
      <h2>フレームワークを使った Web アプリケーション</h2>
      
      <h3>時報サービス作成</h3>
      <p>
        時報サービスをフレームワークを使って作ってみましょう。<br>
        今回は最もシンプルな軽量フレームワークである Slim を使用して作ります。
      </p>
      <a href="clock/public">時報サービス</a>
      
      <h3>プロジェクト作成</h3>
      <pre class="code">
# Terminal を開いて     
# composer コマンドを使って slim プロジェクトを作成

$ cd sandbox
$ mkdir framework
$ cd framework
$ composer create-project slim/slim-skeleton clock
...
$ cd clock
$ ls -l
...
</pre>

      <h3>ディレクトリ構成</h3>
      <pre class="code">
clock
├── CONTRIBUTING.md
├── README.md
├── composer.json         このプロジェクトで使っている PHP のパッケージ
├── composer.lock
├── logs
├── phpunit.xml
├── public                ドキュメントルート
│   └── index.php           Slim の起動ファイル
├── src                   ソースコードの格納ディレクトリ
│   ├── dependencies.php
│   ├── middleware.php
│   ├── routes.php          ルーティング＆コントローラー
│   └── settings.php
├── templates             ビューの格納ディレクトリ
│   └── index.phtml         ルートページのビュー
├── tests
└── vendor                PHP パッケージの格納ディレクトリ
</pre>
      
      <h3>ライブコーディング</h3>
      <p>ここから先はライブコーディングしながら説明します</p>
      
      <pre class="code">
# 修正箇所

lesson/framework/clock
  src
    routes.php
  tamplates
    omikuji.phtml
</pre>
    </section>
    
    <section id="exercise">
      <h2>やってみよう</h2>
      
      <h3>おみくじアプリ作成</h3>
      <p>上記の時報サービスを参考におみくじアプリを作ってみよう</p>
      <a href="omikuji/public">おみくじアプリ</a>
      
      <h3>プロジェクト作成</h3>
      <pre class="code">
# Terminal を開いて     
# composer コマンドを使って slim プロジェクトを作成

$ cd sandbox/framework
$ composer create-project slim/slim-skeleton omikuji
...
$ cd omikuji
$ ls -l
...
</pre>
      
      <h3>回答</h3>
      <p>以下のファイルを御覧ください</p>
      <pre class="code">
lesson/framework/omikuji
  src
    routes.php
  tamplates
    omikuji.phtml
</pre>
    </section>
    
    <section id="refactoring">
      <h2>リファクタリング</h2>
      <p>上記のおみくじアプリをリファクタリング（体質改善）します</p>
      
      <h3>ポイント</h3>
      <ul>
        <li>routes.php に記述されているビジネスロジックをモデルクラスに切り出す</li>
        <li>PHP のネームスペースを使って、クラスを参照する</li>
      </ul>
      
      <h3>解説</h3>
      <p>回答のソースコードを見ながら解説します</p>
      
      <h3>回答</h3>
      <p>以下のディレクトリを御覧ください</p>
      <pre class="code">
lesson/framework/refactoring
</pre>
    </section>
    
    <section>
      <h2>今後に向けて</h2>
      <p>
        今回はシンプルに学習するため、軽量フレームワーク Slim を使用しましたが、
        実際の Web アプリケーション開発では、Ruby on Rails や Laravel 等
        フルスタック（All in one）フレームワークを使うことをお勧めします。
      </p>
    </section>
    
    <section>
      <h2>参考ページ</h2>
      <ul>
        <li><a href="https://www.slimframework.com/docs/tutorial/first-app.html">Slim - First Application Walkthrough</a></li>
        <li><a href="http://blog.orepedia.com/entry/2015/12/07/000000">Slimフレームワークの利用（基本的な処理）</a></li>
        <li><a href="http://qiita.com/asaokamei/items/f915a625cb4d3f9b38de">Slim 3 Frameworkリリースされたので、ざっと紹介</a></li>
      </ul>
    </section>
  </div><!-- #wrapper-->
</body>
</html>