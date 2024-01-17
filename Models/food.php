<?php
// food.php

require_once __DIR__ . '/product.php';
require_once __DIR__ . '/discount.php';

class Food extends Product
{
    public $expiry;
    use Discount;

    public function __construct($name, Category $category, $photo, $price, $expiry)
    {
        parent::__construct($name, $category, $photo, $price);
        $this->expiry = $expiry;
    }

    public function applyAdditionalDiscount()
    {
        $this->applyDiscount(10);
    }
}
