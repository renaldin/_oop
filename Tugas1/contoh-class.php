<?php

class Mahasiswa {
    
}

$classes = get_declared_classes();

echo "Classes: " . implode(', ', $classes) . "<br>";

$classNames = ['Barang', 'Mahasiswa', 'mahasiswa'];

foreach ($classNames as $classNames) {
    if (class_exists($classNames)) {
        echo "{$classNames} class ada. <br>";
    } else {
        echo "{$classNames} class tidak ada. <br>";
    }
}