<?php
namespace Observer;

require_once 'InterfaceObserver.php'; 

use Interface\InterfaceObserver;

class ConcreteObserver implements InterfaceObserver {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update($data) {
        echo "Observador {$this->name} ha sido notificado con la siguiente información: $data\n";
    }
}
