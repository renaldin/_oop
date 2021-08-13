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
    
    var $city;
    var $country;

    function location()
    {
        return $this->city . ', ' . $this->country;
    }

    function fullname()
    {
        return $this->first_name . ', ' . $this->last_name . '(customer)' . '<br>';
    }
}

$q = new User;

$q->first_name = 'Renaldi';
$q->last_name = 'Noviandi';
$q->city = 'Subang';
$q->country = 'Indonesia';

echo $q->fullname() . '<br>';
// echo $q->location() . '<br>';

$p = new Customer;

$p->first_name = 'Customer';
$p->last_name = '001';
$p->city = 'Subang';
$p->country = 'Indonesia';

echo $p->fullname() . '<br>';
echo $p->location() . '<br>';

if (is_subclass_of($p, 'User')) {
    echo 'Instance Customer merupakan subclass dari class User'. '<br>';
}

$parents = class_parents($p);
echo implode(', ', $parents);