<?php 
namespace Factory;

require_once "AbstractFactory.php";
require_once "AbstractProductA.php";
require_once "AbstractProductB.php";
require_once "ConcreteProductA2.php";
require_once "ConcreteProductB2.php";

use Interface\AbstractFactory;
use Interface\AbstractProductA;
use Interface\AbstractProductB;
use Product\ConcreteProductA2;
use Product\ConcreteProductB2;

class ConcreteFactory2 implements AbstractFactory 
{
    public function createProductA():AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB():AbstractProductB
    {
        return new ConcreteProductB2();
    }
}

