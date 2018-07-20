<?php

class Commission{
    private $employees;
    private $president;
    private $commissionners;
    private $vicePresident;

    public function getEmployees(){
        return $this->employees;
    }

    public function setEmployees(Human $employees){
        $this->employees = $employees;

        return $this;
    }
 
    public function getPresident()
    {
        return $this->president;
    }

    public function setPresident(President $president)
    {
        $this->president = $president;

        return $this;
    }

    public function getCommissionners()
    {
        return $this->commissionners;
    }

    public function setCommissionners(Commissionner $commissionners)
    {
        $this->commissionners = $commissionners;

        return $this;
    }
 
    public function getVicePresident()
    {
        return $this->vicePresident;
    }

    public function setVicePresident(VicePresident $vicePresident)
    {
        $this->vicePresident = $vicePresident;

        return $this;
    }

    public static function fromArray(array $definition){
        
        $commission = new Commission();
        $commission->setEmployees(Human::fromArray($definition['employees'] ?? []))
                   ->setPresident(President::fromArray($definition['president'] ?? []))
                   ->setCommissionners(Commissionner::fromArray($definition['commissionners'] ?? []))
                   ->setVicePresident(VicePresident::fromArray($definition['vicePresident'] ?? []));
        
        return $commission;
    }
}

