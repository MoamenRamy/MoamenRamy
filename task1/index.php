<?php


// Associative Array => assoc
$langFramwork = [
    'ruby' => 'Rails',
    'php' => 'laravel',
];

echo $langFramwork['ruby'];
echo "<br>";
echo $langFramwork['php'];
echo "<br>";

$langFramwork['ruby'] = 'rails';
$langFramwork['c#'] = 'Asp.NET';
echo "<pre>";
var_dump($langFramwork);
echo "<pre>";

$product = [
    ['name' => 'mobile', 'price' => 10500],
    ['name' => 'laptop', 'price' => 32000],
];

echo $product[0]['price'];
echo "<pre>";
echo $product[1]['name'];


?>