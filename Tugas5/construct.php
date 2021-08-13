<?php

use Student as GlobalStudent;

class Student {

    public static $instanceCount = 1;

    public function __construct()
    {
        self::$instanceCount++;
    }
}

class Elementary extends Student {

    public $total = 3;
}

class Junior extends Student {

    public $total = 2;
}

class Senior extends Student {

    public $total = 4;
}

$elementary = new Elementary;
echo "Elementary : ($elementary->total) <br>";

$junior = new Junior;
echo "Junior : ($junior->total) <br>";

$senior = new Senior;
echo "Senior : ($senior->total) <br>";

echo Student::$instanceCount . "<br>";