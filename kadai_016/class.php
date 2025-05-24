<!DOCTYPE html>
<heml lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    //クラスを定義する
    class Food {
      //プロパティーを定義する
      private $name;
      private $price;
      

      //コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // Getter method for price
      public function getPrice(): int {
        return $this->price;
      }
    }
    //インスタ化する
    $Food = new Food('potato', 250);

    //インスタスuserの各プロパティーの値を出力する
     print_r($Food);
     echo '<br>';

    //クラスを定義する
    class Animal {
      //プロパティーを定義する
      private $name;
      private $height;
      private $weight;

      //コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // Getter method for weight
      public function getWeight(): int {
        return $this->weight;
      }
    }
    //インスタ化する
    $Animal = new Animal('Animal', 60, 5000);
    //インスタスuserの各プロパティーの値を出力する
    print_r($Animal) ;
    echo '<br>';

    //priceとweightを出力する
    echo $Food->getPrice() . '<br>';
    echo $Animal->getWeight() ;
    ?>
  </p>
  </body>
</html>
