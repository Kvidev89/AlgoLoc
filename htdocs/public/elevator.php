<?php

//$floorList = [];
//for ($i = 1; $i <= 15; $i++) {
//    $floorList[] = $i;
//}
//$floorPress = 15;
//
//
//if (in_array($floorPress, $floorList)) {
//    $res = 'Ви приїхали на '.$floorPress.' поверх.'; 
//} else {
//    $res = 'Ви промазали.';   
//}
//
//echo $res;

//
//$mes = [];
//$hren = '';
//for ($i = 1; $i <= 100; $i++) {
//    $hren = rand(1, 999);
//    $mes[$hren] = $hren;
//}
////print_r($mes);
//$chislo = '';
//$sep = '; ';
//$searchNumberList = [102, 109, 123, 590, 777];
//foreach ($mes as $key => $value) {
//    if ($key >= 5 && $key <= 27) {
//        $chislo .= $key.$sep;
//    } else if ($key >= 234 && $key <= 287) {
//        $chislo .= $key.$sep;
//    } else if (in_array($key, $searchNumberList)) {
//        $chislo .= $key.$sep;
//    } else {
//        $chislo .= 'не знайдено'.$sep ;
//    }
//}
//echo 'Елементів в масиві: '.count($mes);

$privet = ['Привет, ', 'мир' , '!'];
foreach ($privet as $value){
//    echo $value.' ';
     $privet[0] = 'Пока, ';
   
} echo  $value. ' ';



