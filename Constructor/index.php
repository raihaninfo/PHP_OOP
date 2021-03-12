<?php

class person{

    public $name;
    public $age;

    function __construct($name ="No Name", $age = 0)
    {
        $this->name =$name;
        $this->age =$age;
    }

    function show(){
        echo $this->name. " - ". $this->age . "<br>";
    }
}

$p1 = new person();
$p2 = new person("Raihan Mahmudi", 20);
$p3 = new person("Hasan Mahmud", 15);
$p4 = new person("Rabbi Hasan", 18);

// $p1->name = "Raihan Mahmudi";
// $p1->age = 20;
$p1->show();
$p2->show();
$p3->show();
$p4->show();