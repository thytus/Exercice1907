<?php

class VicePresident extends Commissionner
{

    public $department = "";



    /**
     * Get the value of department
     */ 
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set the value of department
     *
     * @return  self
     */ 
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    public static function fromArray(array $definition){

        $vicePresident = new VicePresident();
        $vicePresident->setDepartment($definition ['department'] ?? '');

        return $vicePresident;
    }
}
