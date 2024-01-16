<?php

require __DIR__ . '/category.php';
class Product
{
    public $name;
    public $type;
    public $category;
    public $photo;
    public $description;
    public $price;


    public function __construct($name, $type, Category $category, $photo, $description, $price)
    {

        $this->name = $name;
        $this->type = $type;
        $this->category = $category;
        $this->photo = $photo;
        $this->description = $description;
        $this->price = $price;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }
    public function getCategory()
    {
        return $this->category->name;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
