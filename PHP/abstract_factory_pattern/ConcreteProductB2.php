<?php 
namespace Product;

require_once "AbstractProductB.php";
use Interface\AbstractProductB;

class ConcreteProductB2 implements AbstractProductB 
{  
    public function usefulFunctionB():string 
    {
        return "The Product B2 has been create.";
    }
}

