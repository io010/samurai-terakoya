<DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 変数score1に　数値80　代入する 
          $score1=80;

        // 変数score2に　値60　代入する 
          $score2=60;

        // 変数score3に　値55　代入する 
          $score3=55;
        
        // 変数score4に　値40　代入する
          $score4=40;
        
        // 変数score5に　値100　代入する 
          $score5=100;

        // 変数score6に　値25　代入する 
          $score6=25;

        // 変数score7に　値80　代入する 
          $score7=80;

        // 変数score8に　値95　代入する 
          $score8=95;

        // 変数score9に　値30　代入する 
          $score9=30;

        // 変数score10に　値６０　代入する 
          $score10=60;


        // score1~score10を足す
          echo $score11=$score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;

        // 改行
          echo '<br>';
          
        // 変数score11を10で割る
          echo $scoreAv=$score11 / 10;
        ?>
     </p>
</body>