<?php

namespace App\Models;

/**
 * Represents any person.
 */
class Person
{
    /**
     * Name of the person
     *
     * @var string
     */
    private $name;

    /**
     * Age of the person
     *
     * @var int
     */
    private $age;

    /**
     * Get the name of the person
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the name of the person
     *
     * @param string $name Name of the person
     * @return self
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the age of the person
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the age of the person
     *
     * @param int $age Age of the person
     * @return self
     */
    public function setAge(int $age)
    {
        $this->age = $age;
        return $this;
    }

    function run()
    {
        echo "running";
    }
}

