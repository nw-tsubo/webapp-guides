<html lang="ja">
  <body>
    <!-- PHP は HTML と一緒に記述することができます -->
    <!-- ただし、ファイルの拡張子は ".hmtl" ではなく ".php" となります-->
    
    <?php
      // php タグの間にプログラムを書くことができます。
      
      // 変数は $ で初めます
      $result = 100 * 1.08;
      
      // 各行は ;（セミコロン）で終わらせます
      $greeting = "Hello, World";
    ?>
  
    <!-- echo で変数の内容や計算結果を HTML に埋め込むことができます。 -->
    <?php echo $result; ?><br>
    <?php echo $greeting; ?><br>
    <?php echo "Hello" . ", World"; ?><br>
    
    <!-- echo のショートタグもあります -->
    <?= $greeting; ?><br>
  </body>
</html>