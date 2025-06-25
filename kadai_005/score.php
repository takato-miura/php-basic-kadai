<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>テストの平均点を計算しよう</title>
</head>
<body>
  <p>
    <?php
    //各点数
    $score1=80;
    $score2=60;
    $score3=55;
    $score4=40;
    $score5=100;
    $score6=25;
    $score7=80;
    $score8=95;
    $score9=30;
    $score10=60;

    //$score1~10までを足す
    $total=$score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
    //平均値の計算
    $average=$total/10;
    echo $average
    ?>


  </p>
  
</body>
</html>