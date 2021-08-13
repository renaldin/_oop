<?php

class User {

    var $first_name;
    var $last_name;
    var $username;

    function fullname()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

class Customer extends User {

}

$p = new Customer;

$p->first_name = 'Customer';
$p->last_name = '001';

echo $p->fullname() . '<br>';

if (is_subclass_of($p, 'User')) {
    echo 'Instance Customer merupakan subclass dari class User'. '<br>';
}

$parents = class_parents($p);
echo implode(', ', $parents);