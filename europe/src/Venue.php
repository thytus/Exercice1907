<?php

class Venue{
    private $date;
    private $address;


    public function getDate(){
        return $this->date;
    }

    public function setDate(Date $date){
        $this->date = $date;

        return $this;
    }
   
    public function getAddress(){
        return $this->address;
    }

    public function setAddress(Address $address){
        $this->address = $address;

        return $this;
    }

    public static function fromArray(array $definition){
        
        $venue = new venue();
        $venue->setDate(Date::fromArray($definition['date'] ?? []))
              ->setAddress(Address::fromArray($definition['address'] ?? []));
        
        return $venue;
    }
}