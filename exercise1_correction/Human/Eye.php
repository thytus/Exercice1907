<?php

namespace Human;

class EyeFactory{
    public function __construct() {
        echo __FILE__;
    }
}

class Eye{
    private $color;
    private $quality;
    
  
    public function getColor(){
        return $this->color;
    }

   
    public function getQuality(){
        return $this->quality;
    }

   
    public function setColor(string $color){
        $this->color = $color;
        return $this;
    }

    public function setQuality(string $quality){
        $this->quality = $quality;
        return $this;
    }

    public static function fromArray(array $definition){
        
        $eye = new Eye();
        $eye->setColor($definition['color'] ?? '')
            ->setQuality($definition['quality'] ?? '');
        
        return $eye;
    }
}

