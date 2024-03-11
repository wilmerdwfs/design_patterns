<?php 
namespace Product;

require_once "AbstractProductB.php";
use Interface\AbstractProductB;

class ConcreteProductB1 implements AbstractProductB 
{  
    public function usefulFunctionB():string 
    {
        return "The Product B1 has been create.";
    }
}

