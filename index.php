<?php

require __DIR__ . '/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pet Shop</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2>Animal Planet</h2>
        </div>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?= $product->name ?>
                            </h4>
                            <h5 class="card-price">
                                <?= $product->price . "&euro;" ?>
                            </h5>
                            <h5 class="card-type">
                                <?= $product->photo ?>
                            </h5>
                            <h6 class="card-category">
                                Category: <strong><?= $product->category->name ?></strong>
                            </h6>
                            <h6 class="card-category">
                                <strong> <?= $product->category->description ?></strong>
                            </h6>
                            <h6 class="card-category">
                                Product Type: <strong><?= get_class($product) ?></strong>
                            </h6>
                            <h6 class="card-expiry">
                                Expiry: <strong> <?= isset($product->expiry) ? $product->expiry : "-"  ?></strong>
                            </h6>
                            <h6 class="card-color">
                                Color: <strong><?= isset($product->color) ? $product->color : "-" ?></strong>
                            </h6>
                            <h6 class="card-material">
                                Material: <strong><?= isset($product->material) ? $product->material : "-" ?></strong>
                            </h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>