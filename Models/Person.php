<?php

namespace App\Models;

/**
 * Represents any person.
 */
class Person
{
    /**
     * Name of person
     *
     * @var string
     */
    private $name;

    /**
     * Age of person
     *
     * @var int
     */
    private $age;

    /**
     * Get name of person
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of person
     *
     * @param string $name Name of person
     *
     * @return self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get age of person
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set age of person
     *
     * @param int $age Age of person
     *
     * @return self
     */
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Run action
     */
    public function run()
    {
        echo "running";
    }
}
