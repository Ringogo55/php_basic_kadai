<!DOCTYPE html>
<html lang="UTF-8">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>

<body>
  <p>
    <?php

    $vegetables_price = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($vegetables_price as $key => $value) {
      echo "{$key}:{$value}<br>";
    }

    ?>
  </p>
  </body>