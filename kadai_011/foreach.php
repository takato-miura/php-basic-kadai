<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>
<body>
  <p>
    <?php
    $products=['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];

    foreach($products as $key=>$value){
      echo"{$key}:{$value}<br>";
    }
    ?>
  </p>
  
</body>
</html>