<?php 

namespace App;

include '../Model/Model.php';

use Model\Tabel as ModelTable;

class Tabel {

    public static function get()
    {
        echo "App.Table.get() <br>";
    }
}

Tabel::get();
ModelTable::get();