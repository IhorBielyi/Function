<?php
function filterArray (array $Array, callable $callback) : array
{
    $filteredArray = [];
        foreach ($Array as $num) {
            if ($callback($num)) {
                $filteredArray[] = $num;
            }
        }
    return $filteredArray;
}
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$filteredNumbers = filterArray($numbers, function ($num) {
    return $num % 2 === 0;
});
echo "<pre>";
print_r($filteredNumbers);
echo "<pre>";
echo "<hr><br>";                                                          // Задание №1


$difference = fn($a, $b) => $a - $b;
echo $difference(5, 2);
echo "<hr><br>";                                                         // Задание №2


$string = 'hello world!';
$upperCase = fn($string) => ucfirst($string);
echo $upperCase;
echo "<hr><br>";                                                         // Задание №3


$makeUpperCase = fn($a) => ucfirst($a);
$array = ['toyota', 'lamborghini', 'bentley','mercedes'];
$newArray = array_map($makeUpperCase, $array);
print_r($newArray);
echo "<hr><br>";                                                        // Задание №4

function multuply (&$array, $multiplier)
{
    foreach ($array as &$value) {
        $value *= $multiplier;
    }
}
$array = array(2, 4, 6, 8, 10);
$multiplier = 3;
multuply($array, $multiplier);
print_r($array);
echo "<hr><br>";                                                       // Задание №5

function differenceWords(&$words, $maxLength)
{
    for ($i = 0; $i < count($words); $i++) {
        if (strlen($words[$i]) > $maxLength) {
            array_splice($words, $i, 1);
            $i--;
        }
    }
}
$words = array('Agent', 'Picture', "Self", 'Father', 'Buyer', 'Sentence');           // Задание ;6
differenceWords($words, 5);
print_r($words);






