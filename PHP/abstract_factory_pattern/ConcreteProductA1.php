<?php 
namespace Product;

require_once "AbstractProductA.php";
use Interface\AbstractProductA;


class ConcreteProductA1 implements AbstractProductA 
{  
    public function usefulFunctionA():string 
    {
        return "The Product A1 has been create.";
    }
}

