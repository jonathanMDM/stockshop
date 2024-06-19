<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>StockShop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo URL; ?>assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo URL; ?>shop/css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">StockShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo URL;?>productController/viewProductsUsers">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <a href="<?php echo URL;?>userController/closeSession"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </button>
                </form> 
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">StockShop</h1>
                <p class="lead fw-normal text-white-50 mb-0">New Accessories</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <form method="post">
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($products as $product): ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img height= "200px" width = "200px" src="data:image/jpg; base64" alt = "No tiene Imagen">
                            <div class="card-body p-4">
                                <div class="text-center">
                                <p>Ref: <?php echo $product['idProduct'];?></p>
                                    <h4 class="fw-bolder"><?php echo $product['ProductName']; ?></h4>
                                    <p><?php echo $product['Description']; ?></p>
                                    <h6><?php echo $product['Price']; ?>$</h6>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button type="button" class="btn btn-outline-dark" onclick="showProduct('<?php echo $product['idProduct']; ?>')"><i class="fa fa-cart-plus"></i> View Product</button>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    </form> 
