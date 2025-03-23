<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP16章課題</title>
</head>
<body>
  <p>
  <?php
  class Food{
    public $name;
    public $price;

    public function show_price(string $price){
      $this->name = $price;
    }
  }
  class Animal{
    public $name;
    public $height;
    public $weight;

    public function show_height(string $height){
      $this->name = $height;
    }
  }
  $price = new Food();
  $height = new Animal();
  print_r($user);
  ?>
  </p>
</body>
</html>