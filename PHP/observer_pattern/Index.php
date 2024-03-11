<?php
require_once 'Subject.php';
require_once 'ConcreteObserver.php';

use Subject\Subject;
use Observer\ConcreteObserver;

// Use of Observer Pattern
$subject = new Subject();

$observer1 = new ConcreteObserver("1");
$observer2 = new ConcreteObserver("2");

$subject->addObserver($observer1);
$subject->addObserver($observer2);

$subject->removeObserver($observer2);
$subject->doSomething('Success<br/>');
