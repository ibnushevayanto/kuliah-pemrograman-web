<?php

$negara = ['Indonesia', 'Malaysia', 'Thailand', 'Laos', 'Laos'];

// Array push
$arrayPush = array_push($negara, 'Vietnam');
print_r($arrayPush); // <= Output: 6
echo " <b>variable array_push</b>";
echo "<br>";

print_r($negara); // <= Output: Array ( [0] => Indonesia [1] => Malaysia [2] => Thailand [3] => Laos [4] => Laos [5] => Vietnam )
echo " <b>array_push effect</b>";
echo "<br>";

echo "<br>";

// Array pop
$arrayPop = array_pop($negara);
print_r($arrayPop); // <= Vietnam 
echo " <b>variable array_pop</b>";
echo "<br>";

print_r($negara); // <= Array ( [0] => Indonesia [1] => Malaysia [2] => Thailand [3] => Laos [4] => Laos )
echo " <b>array_pop effect</b>";
echo "<br>";

echo "<br>";

// Array Unique
$arrUniquer = array_unique($negara);
print_r($arrUniquer); // <= Output: Array ( [0] => Indonesia [1] => Malaysia [2] => Thailand [3] => Laos ) 
echo " <b>variable array_unique</b>";
echo "<br>";

array_unique($negara);
print_r($negara);
echo " <b>array_unique effect</b>"; // <= Output: Array ( [0] => Indonesia [1] => Malaysia [2] => Thailand [3] => Laos [4] => Laos )
echo "<br>";

echo "<br>";

$arrEnd = end($negara);
print_r($arrEnd); // <= Output: Laos
echo " <b>variable end()</b>"; 
echo "<br>";

end($negara);
print_r($negara);
echo " <b>end() effect</b>"; // <= Output: Array ( [0] => Indonesia [1] => Malaysia [2] => Thailand [3] => Laos [4] => Laos )
echo "<br>";

echo "<br>";

$arrReset = reset($negara);
print_r($arrReset); // <= Output: Indonesia
echo " <b>variable reset()</b>"; 
echo "<br>";

reset($negara);
print_r($negara);
echo " <b>reset() effect</b>"; // <= Output: Array ( [0] => Indonesia [1] => Malaysia [2] => Thailand [3] => Laos [4] => Laos )
echo "<br>";