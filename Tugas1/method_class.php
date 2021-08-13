<?php

class Mahasiswa {
    var $name;
    var $country = 'none';

    function Hello()
    {
        return 'Hello world';
    }
}

$mahasiswa1 = new Mahasiswa;
$mahasiswa2 = new Mahasiswa;

$mahasiswa1->name = 'Renaldi';
$mahasiswa2->name = 'Agung';

echo $mahasiswa1->name . "<br>";
echo $mahasiswa2->name . "<br>";

echo $mahasiswa1->Hello() . "<br>";
echo $mahasiswa2->Hello() . "<br>";

$method_class = get_class_methods('Mahasiswa');
echo "Method yang dimiliki Mahasiswa : ";
echo "<pre>";
print_r($method_class);
echo '</pre>';

if (method_exists('Mahasiswa', 'Hello')) {
    echo "Method tersedia";
} else {
    echo "Method tidak tersedia";
}