<?php

use Student as GlobalStudent;

class Student {

    public static $instanceCount = 1;

    public $total;
    public $target;

    public function __construct($arr = [])
    {
        self::$instanceCount++;
        $this->total = $arr['total'] ?? $this->total;
        $this->target = $arr['target'] ?? $this->target;
    }
}

class Elementary extends Student {

    public $total = 3;
    public $target = 1;
}

class Junior extends Student {

    public $total = 2;
    public $target = 2;
}

class Senior extends Student {

    public $total = 4;
    public $target = 3;
}

$elementary = new Elementary(['total' => 9, 'target' => 0]);
echo "Elementary : ($elementary->total) <br>";
echo "Target : $elementary->target <br>";

$junior = new Junior(['total' => 8, 'target' => 7]);
echo "Junior : ($junior->total) <br>";
echo "Target : $junior->target <br>";

$senior = new Senior(['total' => 10]);
echo "Senior : ($senior->total) <br>";
echo "Target : $senior->target <br>";

echo Student::$instanceCount . "<br>";