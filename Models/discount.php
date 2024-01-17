<?php

trait Discount
{
    public $discount;

    public function applyDiscount($discountRate)
    {

        $this->discount = $discountRate;
    }
}
