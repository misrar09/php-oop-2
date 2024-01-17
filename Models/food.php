<?php

require_once __DIR__ . '/product.php';

class Food extends Product
{
    public $expiry;

    public function __construct($name, Category $category, $photo, $price, $expiry)
    {

        parent::__construct($name, $category, $photo, $price);

        $this->expiry = $expiry;
    }
}
