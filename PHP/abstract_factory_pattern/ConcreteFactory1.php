<?php 
namespace Factory;

require_once "AbstractFactory.php";
require_once "AbstractProductA.php";
require_once "AbstractProductB.php";
require_once "ConcreteProductA1.php";
require_once "ConcreteProductB1.php";

use Interface\AbstractFactory;
use Interface\AbstractProductA;
use Interface\AbstractProductB;
use Product\ConcreteProductA1;
use Product\ConcreteProductB1;

class ConcreteFactory1 implements AbstractFactory 
{
    public function createProductA():AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB():AbstractProductB
    {
        return new ConcreteProductB1();
    }
}

