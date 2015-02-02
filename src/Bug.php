<?php
// src/Bug.php
use Doctrine\Common\Collections\ArrayCollection;

/**
*  @Entity(repositoryClass="BugRepositoy") @Table(name="bugs")
*/
class Bug
{
    /**
    * @id @Column(type="integer") @GeneratedValue
    * @var int
    */
    protected $id;
    /**
    * @Column(type="string")
    * @var string
    */
    protected $description;
    /**
    * @Column(type="datetime")
    * @var DateTime
    */
    protected $created;
    /**
    * @Column(type="string")
    * @var string
    */
    protected $status;

    protected $products = null;
    protected $engineer;
    protected $reporter;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated(DateTime $created)
    {
        $this->created = $created;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getEngineer()
    {
        return $this->engineer;
    }

    public function setEngineer($engineer)
    {
        $engineer->assignedToBug($this);
        $this->engineer = $engineer;
    }

    public function getReporter()
    {
        return $this->reporter;
    }

    public function setReporter($reporter)
    {
        $reporter->addReportedBug($this);
        $this->repoter = $reporter;
    }

    public function assignToProduct($product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }
}

