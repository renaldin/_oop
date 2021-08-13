<?php 

$array = [1,2,3,4,5,6,7,8,9];
$even = array_filter($array, function ($item) {
    return ($item % 2 == 0);
});

print_r($even);
print_r($array);

$filterFunc = function ($item) {
    return ($item % 2 == 1);
};

$odd = array_filter($array, $filterFunc);
print_r($odd);