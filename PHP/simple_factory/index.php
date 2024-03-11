<?php 
require_once 'SimpleFactory';

use factory\SimpleFactory;

$factory = new SimpleFactory();

$productA = $factory->createProduct('1');
echo $productA->operation(); 

$productB = $factory->createProduct('1');
echo $productB->operation(); 
