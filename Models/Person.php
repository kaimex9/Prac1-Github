<?php

namespace App\Models;

/**
 * Represents any person.
 */
class Person
{
    /**
     * Age of the person
     *
     * @var int
     */
    private $age;
  
    /**
     * Name of the person
     *
     * @var string
     */
    private $name;

    /**
     * Constructor to initialize the person's properties
     *
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
  
    /**
     * Get age of the person
     *
     * @return int
     */ 
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set age of the person
     *
     * @param int $age Age of the person
     *
     * @return self
     */ 
    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Get name of the person
     *
     * @return string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name of the person
     *
     * @param string $name Name of the person
     *
     * @return self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Run action for the person
     */
    public function run()
    {
        echo "running";
    }
}
