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
      </ul>
    </secton>
    
    <section id="description">
      <h2>フレームワークを使った Web アプリケーション</h2>
      
      <h3>時報サービス作成</h3>
      <p>
        時報サービスをフレームワークを使って作ってみましょう。<br>
        今回は PHP のフレームワークである Laravel を使用して作ります。
      </p>
      <a href="clock/public">時報サービス</a>
      
      <h3>プロジェクト作成</h3>
      <pre class="code">
# Terminal を開いて     
# composer コマンドを使って laravel プロジェクトを作成

$ cd sandbox
$ mkdir framework
$ cd framework
$ composer create-project --prefer-dist laravel/laravel clock
...
$ cd clock
$ ls -l
...
</pre>

      <h3>ディレクトリ構成（主な物）</h3>
      <pre class="code">
clock
├── app                         アプリケーションのソースコードを格納するディレクトリ
│   └── Http
│       ├── Controllers         コントローラを格納するディレクトリ
│       └── routes.php          ルートの定義ファイル
├── public                      ドキュメントルートディレクトリ
│   └── index.php               アプリケーションの起動ファイル
├── resources                   リソースを格納するディレクトリ
│   └── views                   ビューを格納するディレクトリ
├─── vendor                     パッケージライブラリを格納するディレクトリ
└─── composer.json              composer でインストールしたパッケージの一覧
</pre>
      
      <h3>ライブコーディング</h3>
      <p>ここから先はライブコーディングしながら説明します</p>
      
      <pre class="code">
# 修正箇所

lesson/framework/clock
  app
    Http
      routes.php
  resources
    views
      clock.blade.php
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
$ composer create-project --prefer-dist laravel/laravel omikuji
...
$ cd omikuji
$ ls -l
...
</pre>
      
      <h3>回答</h3>
      <p>以下のファイルを御覧ください</p>
      <pre class="code">
lesson/framework/clock
  app
    Http
      routes.php
  resources
    views
      omikuji.blade.php
</pre>
    </section>
    
    <section id="refactoring">
      <h2>リファクタリング</h2>
      <p>上記のおみくじアプリをリファクタリング（体質改善）します</p>
      <a href="refactoring/public">おみくじアプリ</a>
      
      <h3>ポイント</h3>
      <ul>
        <li>routes.php に記述されているビジネスロジックをモデルクラスに切り出す</li>
        <li>routes.php に記述されているロジックをコントローラクラスに切り出す</li>
        <li>ビューのファイル名や格納ディレクトリをコントローラに合わせる</li>
        <li>ビューに記述されている HTML の共通部分をレイアウトに切り出す</li>
      </ul>
      
      <h3>解説</h3>
      <p>回答のソースコードを見ながら解説します</p>
      
      <h3>回答</h3>
      <p>以下のディレクトリを御覧ください</p>
      <pre class="code">
lesson/framework/refactoring
  app
    Omikuji.php
    Http
      Controllers
        OmikujiController.php
      routes.php
  resources
    views
      layouts
        app.blade.php
      omikuji
        index.blade.php
</pre>
    </section>
    
    <section>
      <h2>参考ページ</h2>
      <ul>
        <li><a href="https://laravel.com/">Laravel 公式サイト</a></li>
        <li><a href="http://dotinstall.com/lessons/basic_laravel">ドットインストール - Laravel5 入門</a></li>
      </ul>
    </section>
  </div><!-- #wrapper-->
</body>
</html>