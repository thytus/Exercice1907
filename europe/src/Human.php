<?php

class Human
{

    public $firstname = "";
    public $lastname = "";
    public $gender = "";
    private $birthdate = "";
    private $significantOther="";
    private $address="";
    public $work="";

        /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function setGender($gender){
        if (!in_array($gender, ['male', 'female', 'other'])){
            return;
        }

        $this->gender = $gender;
        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of birthdate
     */ 
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */ 
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of significantOther
     */ 
    public function getSignificantOther()
    {
        return $this->significantOther;
    }

    /**
     * Set the value of significantOther
     *
     * @return  self
     */ 
    public function setSignificantOther($significantOther)
    {
        $this->significantOther = $significantOther;

        return $this;
    }

    /**
     * Get the value of work
     */ 
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Set the value of work
     *
     * @return  self
     */ 
    public function setWork($work)
    {
        $this->work = $work;

        return $this;
    }


    public static function fromArray(array $definition){

        $human = new Human();
        $human->setGender($definition ['gender'] ?? '')
                ->setFirstname($definition ['firstname'] ?? '')
                ->setLastname($definition ['lastname'] ?? '')
                ->setBirthdate(Date::fromArray($definition ['birthdate'] ?? ''))
                ->setSignificantOther(Human::fromArray($definition ['significantOther'] ?? ''))
                ->setAddress(Address::fromArray($definition ['address'] ?? ''))
                ->setWork(Work::fromArray($definition ['work'] ?? ''));

        return $human;
    }

}




