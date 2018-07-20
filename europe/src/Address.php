<?php

class Address{
    private $street;
    private $zipCode;
    private $city;
    private $country;

 
    public function getStreet(){
        return $this->street;
    }
 
    public function setStreet(string $street){
        $this->street = $street;

        return $this;
    }
   
    public function getZip_code(){
        return $this->zip_code;
    }
    
    public function setZip_code(int $zipCode){
        $this->zip_code = $zipCode;

        return $this;
    }
  
    public function getCity(){
        return $this->city;
    }
   
    public function setCity(string $city){
        $this->city = $city;

        return $this;
    }

    public function getCountry(){
        return $this->country;
    }

    
    public function setCountry(string $country){
        $this->country = $country;

        return $this;
    }

    public static function fromArray(array $definition){
        
        $address = new Address();
        $address->setStreet((string)$definition['street'] ?? [])
                ->setZipCode((int)$definition['zipCode'] ?? [])
                ->setCity((string)$definition['city'] ?? [])
                ->setCountry((string)$definition['country'] ?? []);
        
        return $address;
    }
}