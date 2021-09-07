<?php

$pathPrivate = dirname(__DIR__).'/private';
define('PRIVATE_DIR_PR', $pathPrivate);
require PRIVATE_DIR_PR.'/db_connect.php';

$err = [];
$errKey = ['name', 'email'];
$request = [];
$requestType = INPUT_POST;
$request['submit'] = filter_input($requestType, 'submit');
if ($request['submit']) {
    
    $request['name'] = filter_input($requestType, 'name');
    $request['email'] = filter_input($requestType, 'email');
    
    /** Name */
    if (empty($request['name'])) {
        $err['name'] = 'ім\'я не заповнене';
    }
    
    /** Email */
    if (empty($request['email'])) {
        $err['email'] = 'email не заповнений';
    }
    
    if (count($err) === 0) {
//        $sql = 'INSERT INTO user (name, email, date_create) VALUES (:name, :email, :date_create)';
//        $stmt = $mysqlPdo->prepare($sql);
//        $rowsNumber = $stmt->execute([
//            ':name' => $request['name'], 
//            ':email' => $request['email'],
//            ':date_create' => date('Y-m-d H:i:s'),
//        ]);
    }
} else {
    foreach ($errKey AS $value) {
        $request[$value] = '555';
    }
}

$errorText = [];
foreach ($errKey AS $value) {
    if (isset($err[$value])) {
        $errorText[$value] = '<div style="color: red;">Помилка: '.$err[$value].'.</div>';
    } else {
        $errorText[$value] = '';
    }
}

$mas = [];
for ($i=1; $i<=9; $i++){
    $mas[] = array_combine($i, $i);
}
echo $mas;



echo '<!DOCTYPE html>
<html>
  <head>
    <title>Пошук у масиві</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="formbox">
    <form action="" method="POST">
      <div class="header_box">
        <h1>Добавити користувача</h1>
      </div>

        <div class="columns">
          <div class="item">
            <label for="fname">Name:<span>*</span></label>
            <input id="name" type="text" name="name" value="'.$request['name'].'" />
          </div>
          '.$errorText['name'].'
          <div class="item">
            <label for="fname">Email:<span>*</span></label>
            <input id="email" type="text" name="email" value="'.$request['email'].'" />
          </div>
          '.$errorText['email'].'
        <div class="btn-block">
          <button name="submit" value="submit">Відправити</button>
        </div>
        
      </fieldset>
    </form>
    </div>

  </body>
</html>';
