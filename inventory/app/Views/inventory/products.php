<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>

<body>

<!-- HEADER -->
<nav class="navbar bg-primary text-white fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-white" href="#">
      <img src="<?= base_url('assets/img/product.webp') ?>" width="30" height="24" class="d-inline-block align-text-top">
      Inventory Management System
    </a>
  </div>
</nav>

<!-- MAIN CONTENT -->
<div class="content-container container">

            <div class="card mt-3">

                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Product Code</th>
                                <th>Product Title</th>
                                <th>Product Price</th>
                                <th style="width:120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                    </table>
                </div>
            </div>

            <!-- Floating Add Button for Deliveries -->
            <button class="btn btn-primary btn-lg rounded-circle shadow-lg floating-btn"
                    data-bs-toggle="modal" data-bs-target="#deliveryModal">
                <i class="bi bi-box"></i>
            </button>

        </div>

<!-- ====================== DELIVERY MODAL ====================== -->
<div class="modal fade" id="deliveryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="bi bi-plus"></i> Add Delivery</h5>
            </div>

            <form action="" method="post">
            <div class="modal-body">

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="pro_number">
                    <label>Product Number</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="supplier_no" name="supplier_no">
                        
                    </select>
                    <label for="supplier_no">Select Supplier</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="del_price">
                    <label>Delivery Price</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="del_qty">
                    <label>Delivery Quantity</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="del_date">
                    <label>Delivery Date</label>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-primary"><i class="bi bi-save"></i> Save Delivery</button>
            </div>
            </form>

        </div>
    </div>
</div>


<!-- ALERT BOX -->
<?php if(session()->getFlashdata('success')): ?>
<script>
Swal.fire({
    title: 'Success!',
    text: '<?= session()->getFlashdata('success'); ?>',
    icon: 'success',
    confirmButtonText: 'OK'
});
</script>
<?php endif; ?>
</body>
</html>
