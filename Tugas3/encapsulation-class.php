<?php

class User {

    public $first_name;
    public $last_name;
    public $username;

    protected $regID = '1010';
    private $level = 'User';

    public function fullname()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    protected function sayProtected()
    {
        return 'Nello, protected';
    }

    private function sayPrivate()
    {
        return 'Hello, privat';
    }
}

class Customer extends User {

    public function sayParents()
    {
        return $this->sayProtected();
    }
}

$p = new User;

$p->first_name = 'User';
$p->last_name = 'err';

// echo $p->regID . '<br>';
// echo $p->level . '<br>';

echo $p->fullname() . '<br>';
// echo $p->sayProtected() . '<br>';
// echo $p->sayPrivate() . '<br>';

$q = new Customer;
echo $q->sayParents() . '<br>';

