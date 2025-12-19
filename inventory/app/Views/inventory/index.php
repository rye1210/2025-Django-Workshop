<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100 fade-in">
        <div class="text-center">

            <!-- Heading -->
            <h1 class="mb-4 heading">Inventory Management System</h1>

            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                        <button class="card-button" id="productBtn" onclick="window.location.href='<?= base_url('products') ?>';">
                            <img src="<?= base_url('assets/img/product.webp') ?>" alt="Product">
                            <b>Products</b>
                        </button>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                        <button class="card-button" id="customerBtn">
                            <img src="<?= base_url('assets/img/customer.png') ?>" alt="Customer">
                            <b>Customers</b>
                        </button>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                        <button class="card-button" id="deliveryBtn" onclick="window.location.href='<?= base_url('suppliers') ?>';">
                            <img src="<?= base_url('assets/img/delivery.png') ?>" alt="Delivery">
                            <b>Delivery</b>
                        </button>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                        <button class="card-button" id="orderBtn">
                            <img src="<?= base_url('assets/img/order.png') ?>" alt="Order">
                            <b>Orders</b>
                        </button>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                        <button class="card-button" id="reportBtn">
                            <img src="<?= base_url('assets/img/report.png') ?>" alt="Report">
                            <b>Reports</b>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
