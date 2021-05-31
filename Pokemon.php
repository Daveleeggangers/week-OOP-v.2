<?php

class Pokemon {

    public $Name;
    public $Type;
    public $HP;
    public $Attack1;
    public $Attack2;
    public $Weakness;
    public $Resistance;

    public function __construct($Name, $Type, $HP, $Attack1, $Attack2, $Weakness, $Resistance)
    {
        $this->Name = $Name;
        $this->Type = $Type;
        $this->HP = $HP;
        $this->Attack1 = $Attack1;
        $this->Attack2 = $Attack2;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
    }

    public function __toString() {
        return json_encode($this);
    }

    public function Pokemon1()
    {
        echo '<div class="Pikachu">' . $this->Name . '<br>' . $this->Type . '<br>' . '<input type="text" id="HPPokemonPika" value="' . $this->HP  . '" disabled>' . '<input type="text" id="WeaknessPika" value="' . $this->Weakness  . '" disabled>' . '<input type="text" id="ResistancePika" value="' . $this->Resistance . ' " disabled> ' . '</div>';
    }

    public function Pokemon2()
    {
        echo '<div class="Charmander">' . $this->Name . '<br>' . $this->Type . '<br>' . '<input type="text" id="HPPokemonChar" value="' . $this->HP  . '" disabled>' . '<input type="text" id="WeaknessChar" value="' . $this->Weakness  . '" disabled>' . '<input type="text" id="ResistanceChar" value="' . $this->Resistance . ' " disabled> ' . '</div>';
    }

}