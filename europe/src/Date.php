<?php

class Date{
    private $day;
    private $month;
    private $year;

     
    public function getDate(){
        return $this->date;
    }

    public function setDate(int $day){
        $this->date = $date;

        return $this;
    }
    
    public function getMonth(){
        return $this->month;
    }

    public function setMonth(int $month){
        $this->month = $month;

        return $this;
    }

    
    public function getYear(){
        return $this->year;
    }

    public function setYear(int $year){
        $this->year = $year;

        return $this;
    }

    public static function fromArray(array $definition){
        
        $date = new date();
        $date->setDay((int)$definition['day'] ?? [])
             ->setMonth((int)$definition['month'] ?? [])
             ->setYear((int)$definition['year'] ?? []);
        
        return $date;
    }
}

