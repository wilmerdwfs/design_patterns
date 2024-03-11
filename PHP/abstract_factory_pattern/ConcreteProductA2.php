<?php 
namespace Product;

require_once "AbstractProductA.php";
use Interface\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA 
{  
    public function usefulFunctionA():string 
    {
        return "The Product A2 has been create.";
    }
}

