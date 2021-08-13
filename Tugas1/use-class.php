<?php

class Mahasiswa {
    var $first_name;
    var $last_name;
    var $country = 'none';

    function Hello()
    {
        return 'Hello world';
    }

    function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

$mahasiswa1 = new Mahasiswa;

$mahasiswa1->first_name = 'Renaldi';
$mahasiswa1->last_name  = 'Noviandi';

echo $mahasiswa1->first_name . "<br>";
echo $mahasiswa1->last_name . "<br>";


echo $mahasiswa1->Hello() . "<br>";
echo $mahasiswa1->fullName() . '<br>';

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