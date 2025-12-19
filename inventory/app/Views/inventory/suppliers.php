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

    <!-- DELIVERY and SUPPLIERS -->
    <ul class="nav nav-tabs" id="mainTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="deliveries-tab" data-bs-toggle="tab" data-bs-target="#deliveries" type="button" role="tab">
                <i class="bi bi-truck"></i> Deliveries
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="suppliers-tab" data-bs-toggle="tab" data-bs-target="#suppliers" type="button" role="tab">
                <i class="bi bi-people-fill"></i> Suppliers
            </button>
        </li>
    </ul>

    <!-- TAB CONTENT -->
    <div class="tab-content">

        <!-- ====================== DELIVERIES TAB ====================== -->
        <div class="tab-pane fade show active" id="deliveries" role="tabpanel">

            <div class="card mt-3">

                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Date of Delivery</th>
                                <th>Product Number</th>
                                <th>Supplier</th>
                                <th>Quantity</th>
                                <th>Delivery Price</th>
                                <th style="width:120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($deliveries as $rows): ?>
                                <tr>
                                    <td><?= esc($rows['del_date']); ?></td>
                                    <td><?= esc($rows['pro_no']); ?></td>
                                    <td><?= esc($rows['sup_no']); ?></td>
                                    <td><?= esc($rows['del_qty']); ?></td>
                                    <td><?= esc($rows['del_price']); ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Floating Add Button for Deliveries -->
            <button class="btn btn-primary btn-lg rounded-circle shadow-lg floating-btn"
                    data-bs-toggle="modal" data-bs-target="#deliveryModal">
                <i class="bi bi-truck-flatbed"></i>
            </button>

        </div>

        <!-- ====================== SUPPLIERS TAB ====================== -->
        <div class="tab-pane fade" id="suppliers" role="tabpanel">

            <div class="card mt-3">

                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Supplier Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th style="width:120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($suppliers as $rows): ?>
                                <tr>
                                    <td><?= esc($rows['sup_title']); ?></td>
                                    <td><?= esc($rows['sup_address']); ?></td>
                                    <td><?= esc($rows['sup_contact']); ?></td>
                                    <td><?= esc($rows['sup_email']); ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Floating Add Button for Suppliers -->
            <button class="btn btn-primary btn-lg rounded-circle shadow-lg floating-btn"
                    data-bs-toggle="modal" data-bs-target="#supplierModal">
                <i class="bi bi-person-plus-fill"></i>
            </button>

        </div>
    </div>
</div>


<!-- ====================== SUPPLIER MODAL ====================== -->
<div class="modal fade" id="supplierModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="bi bi-person-plus"></i> Add Supplier</h5>
                <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="<?= base_url('save_supplier') ?>" method="post">
            <div class="modal-body">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="supplier_name">
                    <label>Supplier Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="supplier_address">
                    <label>Supplier Address</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="supplier_contact">
                    <label>Contact Number</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="supplier_email">
                    <label>Email Address</label>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-primary"><i class="bi bi-save"></i> Save Supplier</button>
            </div>
            </form>

        </div>
    </div>
</div>


<!-- ====================== DELIVERY MODAL ====================== -->
<div class="modal fade" id="deliveryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="bi bi-plus"></i> Add Delivery</h5>
            </div>

            <form action="<?= base_url('save_delivery') ?>" method="post">
            <div class="modal-body">

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="pro_number">
                    <label>Product Number</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="supplier_no" name="supplier_no">
                        <option value="" selected disabled></option>

                        <?php foreach ($suppliers as $row): ?>
                            <option value="<?= $row['sup_no']; ?>">
                                <?= esc($row['sup_title']); ?>
                            </option>
                        <?php endforeach; ?>
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
