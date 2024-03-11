<?php
namespace Subject;

require_once 'InterfaceObserver.php';

use Interface\InterfaceObserver;

class Subject {
    private $observers = [];

    public function addObserver(InterfaceObserver $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(InterfaceObserver $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers($data) {
        foreach ($this->observers as $observer) {
            $observer->update($data);
        }
    }

    public function doSomething($data) {
        // Hacer algo y luego notificar a los observadores
        $this->notifyObservers($data);
    }
}
