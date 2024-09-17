<?php

namespace App\Models;

/**
 * Represents coach.
 */
class Coach extends Person
{

  

    private $active;

    /**
     * Coach tactic
     *
     * @var string
     */
    private $tactic;

    /**
     * Construct a Coach with a name, the status, and a tactic.
     *
     * @param string $name     Coach name
     * @param bool $active     Coach Status
     * @param string $tactic   La nueva táctica a implementar
     */
    public function __construct(string $name, bool $active, string $tactic)
    {
        $this->setName($name); // Usa el método de la clase Person para establecer el nombre
        $this->active = $active;
        $this->tactic = $tactic;
    }

    /**
     * Get Coach Status
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set Coach status
     *
     * @param bool $active Coach status
     * @return self
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
        return $this;
    }

    public function getTactic()
    {
        return $this->tactic;
    }

    public function deviseTeamTactic(string $tactic): void
    {
        echo "{$this->getName()} says: Alright team, our new tactic for the next game will be '{$tactic}'!";
    }

    function train()
    {
        echo "{$this->getName()} says: Come on Team, let's go train!";
    }
}

