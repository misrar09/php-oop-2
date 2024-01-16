<?php
require __DIR__ . '/Models/product.php';


$products = [

    new Product(
        'Cooked Fish',
        'Food',
        new Category('Cats Dogs'),
        '<img src ="https://picsum.photos/id/237/200/300"',
        'this is a cats and dogs food',
        5.00
    ),

    new Product(
        'Cat House',
        'House',
        new Category('Cats'),
        '<img src ="https://picsum.photos/id/237/200/300"',
        'this is a Cat House',
        50.00
    ),

    new Product(
        'Dog House',
        'House',
        new Category('Dogs'),
        '<img src ="https://picsum.photos/id/237/200/300"',
        'this is a Dog House',
        150.00
    ),

    new Product(
        'Toy',
        'Animal Toys',
        new Category('Cats Dogs'),
        '<img src ="https://picsum.photos/id/237/200/300"',
        'these are animal toys',
        8.00
    ),




];
