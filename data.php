<?php
require_once __DIR__ . '/Models/product.php';
require_once __DIR__ . '/Models/food.php';
require_once __DIR__ . '/Models/toy.php';
require_once __DIR__ . '/Models/kennel.php';


$cats = new Category('Cats', 'This product is exclusivly for Cats');
$dogs = new Category('Dogs', 'This product is excelusivly for Dogs');

$products = [

    new Food(
        'Cooked Fish',
        $cats,
        '<img src ="https://picsum.photos/id/237/200/300"',
        5.00,
        '2025/05'
    ),

    new Kennel(
        'Cat House',
        $cats,
        '<img src ="https://picsum.photos/id/237/200/300"',
        50.00,
        'Red'
    ),

    new Kennel(
        'Dog House',
        $dogs,
        '<img src ="https://picsum.photos/id/237/200/300"',
        150.00,
        'Green'
    ),

    new Toy(
        'Toy',
        $dogs,
        '<img src ="https://picsum.photos/id/237/200/300"',
        8.00,
        'Silicon'
    ),




];
