<?php 
namespace Interface;

require_once "AbstractProductA.php";
require_once "AbstractProductA.php";

use Interface\AbstractProductA;
use Interface\AbstractProductB;

interface AbstractFactory 
{
  public function createProductA(): AbstractProductA;
  public function createProductB(): AbstractProductB;
}