<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>CSS入門</title>

  <!-- highlight.js -->
  <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/github.min.css">-->
  <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/agate.min.css">-->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/railscasts.min.css">
  <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/dracula.min.css">-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  
  <!-- 外部のCSSファイルを読み込みます -->
  <link rel="stylesheet" href="/css/site.css?<?= str_shuffle('abcedefg1234567890'); ?>">
</head>

<body>
  <div id="wrapper">
    <h1>CSS入門</h1>
    
    <secton>
      <h2>CSS とは</h2>
      
      <ul>
        <li>HTML が文章の構造を定義するに対して、CSS はスタイル（デザイン）を定義するため言語です</li>
        <li>WWW ブラウザが CSS を読み取って人がわかりやすいように表示します</li>
      </ul>
      
    </secton>
    
    <secton>
      <h2>CSS 適用の手順</h2>
      
      <article>
        <h3>HTML への追記</h3>
        
        <ul>
          <li><a href="#html-attribute">HTML タグに id や class 属性を追記する</a></li>
          <li><a href="#html-css">CSS を記述する場所</a></li>
        </ul>
      </article>
        
      <article>
        <h3>CSS の定義</h3>
        
        <ul>
          <li><a href="#css-selector">セレクタの記述方法</a></li>
          <li><a href="#css-property">プロパティの記述方法</a></li>
        </ul>
      </article>
    </secton>
    
    <section>
      <h2>HTML への追記</h2>
      
      <article>
        <h3>HTML タグに id や class 属性を追記する</h3>
        
        <pre><code class="html">
<?= require('src/id_class.html.php'); ?>
        </code></pre>
      </article>
      
      <article>
        <h3>CSS を記述する場所</h3>
        
        <ul>
          <li>HTML タグの style 属性</li>
          <li>head タグ内の script タグ</li>
          <li>外部ファイル</li>
        </ul>
        
        <h4>HTML タグの style 属性に書く</h4>
        <pre><code class="html">
<?= require('src/inline_style.html.php'); ?>
        </code></pre>
        
        <h4>head タグ内の script タグに書く</h4>
        <pre><code class="html">
<?= require('src/style_tag.html.php'); ?>
        </code></pre>
        
        <h4>外部のファイルに書く</h4>
        <pre><code class="html">
<?= require('src/external_file.html.php'); ?>
        </code></pre>
      </article>
    </section>

    <section>
      <h2>CSS の定義</h2>
      
      <article>
        <h3>セレクタの記述方法</h3>
        <p>HTML のどこに CSS を適用するかの指定</p>
        <pre><code class="css">
<?= require('src/selector.css.php'); ?>
        </code></pre>
      </article>
  
      <article>
        <h3>プロパティの記述方法</h3>
        <p>どのようなスタイル（デザイン）を適用するかの指定</p>
        <pre><code class="css">
<?= require('src/property.css.php'); ?>
        </code></pre>
        <p>
          プロパティと値の記述方法は、プロパティ毎に色々あります。
          必要なときに検索して調べながら、徐々に使える物を増やしましょう。
        </p>
      </article>
    </section>
    
    <section id="sample">
      <h2>CSS の使用例</h2>
      <ul>
        <li><a href="before.html">CSS 使用前</a></li>
        <li><a href="after.html">CSS 使用後</a></li>
      </ul>
    </section>
    
    <section id="exercise">
      <h2>やってみよう</h2>
      <ol>
        <li>上記の "CSS 使用前" のソースコードをコピーして "CSS 使用後" のソースコードに変更する</li>
        <li>box クラスの背景色を指定する</li>
        <li>CSS の定義を外部のファイルに移動する</li>
      </ol>
    </section>
    
    <section>
      <h2>デベロッパーツール</h2>
      <p>
        WWW ブラウザには WEB サイトの開発者向けにデベロッパーツールが備わっています。
        HTML や CSS、JavaScript を検証する為の便利な機能が提供されています。
      </p>
      
      <h3>主な機能</h3>
      <ul>
        <li>HTML の内容を閲覧ができる</li>
        <li>HTML の各要素の適用されている CSS を確認できる</li>
        <li>CSS の適用内容を一時的に変更して確認できる</li>
        <li>JavaScript プログラムのデバッグができる</li>
        <li>スマートフォン等の各種デバイスでの表示を確認できる</li>
      </ul>
      
      <h3>使ってみよう</h3>
      <ol>
        <li>デベロッパーツールを表示する</li>
        <li>HTML の要素を選択する</li>
        <li>CSS の適用内容を確認する</li>
        <li>CSS の適用内容を一時的に変更して表示の変化を確認する</li>
        <li>iPhone での表示結果を確認する</li>
        <li>デベロッパーツールの表示位置を変更する</li>
      </ol>
      <a href="https://ferret-plus.com/1880">使い方の参考ページ</a>
    </section>
    
    <section>
      <h2>参考ページ</h2>
      <ul>
        <li><a href="http://www.htmq.com/csskihon/">HTML クイックリファレンス - CSS の基本</a></li>
        <li><a href="https://prog-8.com/languages/html">Progate - HTML & CSS</a></li>
        <li><a href="http://dotinstall.com/lessons/basic_css_v3">ドットインストール - CSS 入門</a></li>
        <li><a href="http://dotinstall.com/lessons/basic_css_layout">ドットインストール - CSS レイアウト入門</a></li>
        <li><a href="https://ferret-plus.com/1880">Chrome デベロッパーツールの使い方</a></li>
        <li><a href="http://www.buildinsider.net/web/chromedevtools/01">Chrome デベロッパーツール入門</a></li>
      </ul>
    </section>
    
  </div><!-- #wrapper-->
</body>
</html>
