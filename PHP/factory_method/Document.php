<?php
namespace  'creator';
// Clase base Document
abstract class Document {
    // Factory Method
    abstract public function createReader(): Reader;
    
    // Método que utiliza el Factory Method
    public function readDocument() {
        $reader = $this->createReader();
        return $reader->read();
    }
}