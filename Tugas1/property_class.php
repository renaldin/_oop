<?php

class Mahasiswa {
    var $name;
    var $country = 'none';
}

$mahasiswa1 = new Mahasiswa;
$mahasiswa2 = new Mahasiswa;

$mahasiswa1->name = 'Renaldi';
$mahasiswa2->name = 'Agung';

echo $mahasiswa1->name . "<br>";
echo $mahasiswa2->name . "<br>";

$class_vars = get_class_vars('Mahasiswa');
echo "Properti yang dimiliki class : ";
echo "<pre>";
print_r($class_vars);
echo '</pre>';

if (class_exists('Mahasiswa', 'name')) {
    echo "Property tersedia";
} else {
    echo "Property tidak tersedia";
}