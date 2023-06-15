<?php

$allframeworks = ['laravel', 'Asp.NET', 'Rails'];
echo $allframeworks[0];
$allframeworks[] = 'Express';

echo "<pre>";

var_dump($allframeworks);
array_push($allframeworks, 'Django', 'spring');
print_r($allframeworks);