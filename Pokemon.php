<?php

class Pokemon {

    public $Name;
    public $Type;
    public $HP;
    public $Attacks;
    public $Weakness;
    public $Resistance;

    public function __construct($Name, $Type, $HP, $Attacks, $Weakness, $Resistance)
    {
        $this->Name = $Name;
        $this->Type = $Type;
        $this->HP = $HP;
        $this->Attacks = $Attacks;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
    }

    public function __toString() {
        return json_encode($this);
    }

}