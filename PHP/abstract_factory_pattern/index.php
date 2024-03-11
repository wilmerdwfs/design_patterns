<?php 
require_once "AbstractFactory.php";
require_once "ConcreteFactory1.php";
require_once "ConcreteFactory2.php";

use Interface\AbstractFactory;
use Factory\ConcreteFactory1;
use Factory\ConcreteFactory2;

function client(AbstractFactory $factory)
{
    $productA1 = $factory->createProductA();
    echo  $productA1->usefulFunctionA() . "</br>";
    
    echo "other relatives of the same family. </br>";

    $productB1 = $factory->createProductB();
    echo  $productB1->usefulFunctionB() . "</br>";

}

client(new ConcreteFactory1());
client(new ConcreteFactory2());
