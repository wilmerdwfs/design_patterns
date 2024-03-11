<?php 
namespace factory;

require_once 'ConcreteProduct1';
require_once 'ConcreteProduct2';

use product\ConcreteProduct1;
use product\ConcreteProduct2;

class SimpleFactory {
    public function createProduct($type) {
        switch ($type) {
            case '1':
                return new ConcreteProduct1();
            case '2':
                return new ConcreteProduct2();
            default:
                throw new Exception('The type of product is enabled');
        }
    }
}