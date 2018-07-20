<?php

class President extends VicePresident
{

    public $commission = "";




    /**
     * Get the value of commission
     */ 
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set the value of commission
     *
     * @return  self
     */ 
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    public static function fromArray(array $definition){

        $president = new VicePresident();
        $president->setCommission(Commission::fromArray($definition ['commission'] ?? ''));

        return $president;
    }
}
