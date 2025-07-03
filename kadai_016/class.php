<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <p>
        <?php
        // クラスを定義する
        class food {
            // プロパティを定義する                        
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッドを定義する
      public function set_name(string $name) {
        $this->name = $name;
      }
      public function show_price(){
        echo $this->price . '<br>';
      } 
        }

        // インスタンス化する
        $food = new food('potato', 250);
        

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
        echo'<br>';
       
        

        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッドを定義する
      public function set_name(string $name) {
        $this->name = $name;
      }
      public function show_height(){
        echo $this->height . '<br>';
      } 
        }

        // インスタンス化する
        $Animal = new Animal('dog', 60, '5000');
        

        // インスタンス$Animalの各プロパティの値を出力する
        print_r($Animal);
        echo'<br>';
         $food->show_price();
        $Animal->show_height();
        
        
        ?>
    </p>
  
</body>
</html>