<?php 
namespace product;

require_once 'AbstractProduct';

use product\AbstractProduct;

class ConcreteProduct2 extends AbstractProduct
{
	public function operation ()
	{
		return "Operation of Product 2\n";
    }
} 