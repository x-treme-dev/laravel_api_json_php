<?php
// подключить пакет
require_once 'vendor/autoload.php';

$names = json_decode(file_get_contents('names.json'));
foreach($names as $key => $name){
   // echo $key . '==' . $name . '<br>';
}
//dump($names);
// json_decode() с параметром true - получить ассоциативный массив
$user = json_decode(file_get_contents('user.json'), true); 
//dump($user);
//dump($user['name']);

$products = json_decode(file_get_contents('products.json'), true);
//dump($products);
foreach($products as $product){
    echo $product['name'] . "<br>";
}

$names = include 'names.php';
//dump($names);
$names = json_encode($names);
//dump($names);
// JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES - правильно запишет кириллицу и слеши в дате
// json все равно будет декодироваться, поэтому эти 3 флага избыточны
$user = json_encode( include('user.php'), JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
dump($user);


