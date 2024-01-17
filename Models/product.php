<?php

require_once __DIR__ . '/category.php';
/* require_once __DIR__ . '/food.php';
require_once __DIR__ . '/toy.php';
require_once __DIR__ . '/kennel.php'; */

class Product
{
    public $name;
    public $category;
    public $photo;
    public $price;


    public function __construct($name, Category $category, $photo, $price)
    {

        $this->name = $name;
        $this->category = $category;
        $this->photo = $photo;
        $this->price = $price;
    }


    /*     public function getName()
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
    } */
}
