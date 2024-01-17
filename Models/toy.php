<?php
require_once __DIR__ . '/product.php';
class Toy extends Product
{
    public $material;

    public function __construct($name, Category $category, $photo, $price, $material)
    {

        parent::__construct($name, $category, $photo, $price);
        $this->material = $material;
    }
}
