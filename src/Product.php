<?php
// src/Product.php
/*
 * @Entity @Table(name="products")
 */
class Product
{
    /** @id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="strine") **/
    protected $name;

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
}
