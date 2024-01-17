<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/discount.php';
class Toy extends Product
{
    public $material;
    use Discount;

    public function __construct($name, Category $category, $photo, $price, $material)
    {

        parent::__construct($name, $category, $photo, $price);
        $this->material = $material;
    }

    public function applyAdditionalDiscount($discountRate)
    {
        $this->applyDiscount($discountRate);
    }
}
