<?php 
namespace product;

require_once 'AbstractProduct';

use product\AbstractProduct;

class ConcreteProduct1 extends AbstractProduct
{
	public function operation ()
	{
		return "Operation of Product 1\n";
    }
} 