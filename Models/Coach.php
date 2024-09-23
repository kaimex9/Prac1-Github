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
     * Status of the person (active/inactive)
     *
     * @var boolean
     */
    private $active;

    /**
     * Tactic of the person (if coach)
     *
     * @var string
     */
    private $tactic;

    /**
     * Age of the person
     *
     * @var int
     */
    private $age;

    /**
     * Construct a Person with a name, status, age, and possibly a tactic.
     *
     * @param string $name   Name of the person
