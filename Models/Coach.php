<?php

namespace App\Models;

/**
 * Represents coach.
 */
class Coach extends Person
{
    /**
     * Coach Status
     *
     * @var boolean
     */
    private $active;

    /**
     * Coach tactic
     *
     * @var string
     */
    private $tactic;

    /**
     * Construct a Coach with a name and the status.
     *
     * @param string $name     Coach name
     * @param bool $active     Coach Status
     * @param string $tactic   La nueva táctica a implementar
     */
    public function __construct(string $name, bool $active, string $tactic)
    {
        parent::setName($name); // Establecer el nombre usando la clase base
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

    public function getTactic()
    {
        return $this->tactic;
    }

    /**
     * Set status in bool
     *
     * @param bool $active is true or false
     *
     * @return self
     */
    public function setActive(bool $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Devise team tactic
     *
     * @param string $tactic
     */
    public function deviseTeamTactic(string $tactic): void
    {
        echo "{$this->getName()} says: Alright team, our new tactic for the next game will be '{$tactic}'!";
    }

    public function train()
    {
        echo "{$this->getName()} says: Come on Team, let's go train!!!!!"; // Corregido aquí
    }
}
