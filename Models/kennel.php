<?php
require_once __DIR__ . '/product.php';
class Kennel extends Product
{
    public $color;

    public function __construct($name, Category $category, $photo, $price, $color)
    {
        parent::__construct($name, $category, $photo, $price);
        $this->color = $color;
    }
}
