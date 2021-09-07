<?php

$arr = [
    9 => 9,
    30 => 30,
    8 => 8,
    21 => 21,
    26 => 26,
    23 => 23,
    17 => 17,
    5 => 5,
    24 => 24,
    2 => 2,
    27 => 27,
    28 => 28,
    15 => 15,
    20 => 20,
    4 => 4,
];

$itemRaw = filter_input(INPUT_POST, 'fname');
$item = (int) $itemRaw;
$found = lineSearch($item, $arr);
$count = count($arr);
if (null !== $found) {
    $res = 'знайдено';
} else {
    $res = 'не знайдено';
}

echo '';
$message = 'значення ' . $item . ' ' . $res . ' із ' . $count . ' значень';

$mes = implode('; ', $arr);
$mes2 = '';
$arval = [8, 26, 27, 23];
foreach ($arr as $key => $value) {
    if ($key === 20) {
        $value = 111;
    }
    if (in_array($value, $arval)) {
        $value = 888;
    } else {
        $value = -1;
    }


    $mes2 .= $value . '; ';
}

$arm3 = [];
for ($i = 0; $i < 100; $i++) {
    $arm3[$i] = rand(1, 957);
}
//print_r($arm3);

$rezarm = [];
$zez = [7, 9, 11, 15, 17];
foreach ($arm3 as $value) {
    if ($value >= 150 && $value <= 157) {
        $rezarm[] = $value;
    } else if ($value >= 720 && $value <= 723) {
        $rezarm[] = $value;
    } else if (in_array($value, $zez)) {
        $rezarm[] = $value;  
    } 
}

$rezarmCount = count($rezarm);
if (0 === $rezarmCount) {
    $message = 'не знайдено нічогісьоньки!';
} else {
    $message = 'Знайдено: '.$rezarmCount. '. Значення: '.join('; ', $rezarm);
}
echo $message;



echo '<!DOCTYPE html>
<html>
  <head>
    <title>Пошук у масиві</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="formbox">
    <form action="" method="POST">
      <div class="header_box">
        <h1>Пошук у масиві</h1>
      </div>

        <div class="columns">
          <div class="item">
            <label for="fname">Знайти:<span>*</span></label>
            <input id="fname" type="text" name="fname" value="" />
          </div>
          <div>Знайдено, ' . $message . '
          </div>
        <div class="btn-block">
          <button name="submit" value="submit">Відправити</button>
        <div>' . $mes . '</div>
        <div>' . $mes2 . '</div>
        </div>
        
      </fieldset>
    </form>
    </div>

  </body>
</html>

';

function lineSearch(int $item, array $arr): ?int {
    $res = null;

    foreach ($arr as $key => $value) {
        if ($item === $value) {
            $res = $key;
            break;
        }
    }

    return $res;
}
