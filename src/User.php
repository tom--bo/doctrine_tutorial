<?php
//src/User.php
use Doctrine\Common\Collections\ArrayCollection;

/**
* @Entity @Table(name="users")
*/
class User
{
    /**
    * @id @GeneratedValue @Column(type="integer")
    * @var int
    */
    protected $id;
    /**
    * @Column(type="string")
    * @var string
    */
    protected $name;

    protected $products;
    private $reportedBugs = null;
    private $assignedBugs = null;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function addReportedBug($bug)
    {
        $this->reportedBugs[] = $bug;
    }

    public function assignedToBug($bug)
    {
        $this->assignedBugs[] = $bug;
    }
}
