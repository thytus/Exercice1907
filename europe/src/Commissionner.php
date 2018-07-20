<?php

class Commissionner extends Human
{

    public $workAddress = "";
    public $bodyguard = "";
    public $team = "";


    /**
     * Get the value of workAddress
     */ 
    public function getWorkAddress()
    {
        return $this->workAddress;
    }

    /**
     * Set the value of workAddress
     *
     * @return  self
     */ 
    public function setWorkAddress($workAddress)
    {
        $this->workAddress = $workAddress;

        return $this;
    }

    /**
     * Get the value of bodyguard
     */ 
    public function getBodyguard()
    {
        return $this->bodyguard;
    }

    /**
     * Set the value of bodyguard
     *
     * @return  self
     */ 
    public function setBodyguard($bodyguard)
    {
        $this->bodyguard = $bodyguard;

        return $this;
    }

    /**
     * Get the value of team
     */ 
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set the value of team
     *
     * @return  self
     */ 
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    public static function fromArray(array $definition){

        $commissionner = new Commissionner();
        $commissionner->setWorkAddress($definition ['workAddress'] ?? '')
                ->setBodyguard($definition ['bodyguard'] ?? '')
                ->setTeam(Human::fromArray($definition ['team'] ?? ''));

        return $commissionner;
    }



}
