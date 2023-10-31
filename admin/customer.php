<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php require('inc/links.php') ?>
</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>
    <div class="container-xxl">
        <table class="table table-hover">
            <thead>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>CMND</th>
                <th>Email</th>
                <th>Hành động</th>
            </thead>
            <tbody>
                <?php
                require('inc/db_config.php');
                $query = "SELECT * FROM customer";
                $query_run = mysqli_query($_GLOBALS['conn'], $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $items) {
                ?>
                        <tr>
                            <td><?= $items['name']; ?></td>
                            <td><?= $items['number_phone']; ?></td>
                            <td><?= $items['identity_number']; ?></td>
                            <td><?= $items['email']; ?></td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá khách hàng này không?');" href="customer_data_controller.php?action=delete&id=<?php echo $items['customer_id']; ?>">Xoá</a>
                                <a class="btn btn-success" href="editCustomer.php?id=<?php echo $items['customer_id']; ?>">Chỉnh sửa</a>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">No Record Found</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm khách hàng mới
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="add_new_customer.php" method="post">
                            <div class="form-group">
                                <label for="hoten">Họ tên</label>
                                <input type="text" id="name" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="masv">Số điện thoại</label>
                                <input type="text" name="number_phone" id="number_phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lop">CMND</label>
                                <input type="text" id="identity_number" name="identity_number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lop">Giới tính</label>
                                <input type="text" id="gender" name="gender" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lop">Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <button name="addCustomerBtn" class="btn btn-success">Thêm khách hàng</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin khách hàng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="add_new_customer.php" method="post">
                            <div class="form-group">
                                <label for="hoten">Họ tên</label>
                                <input type="text" id="name" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="masv">Số điện thoại</label>
                                <input type="text" name="number_phone" id="number_phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lop">CMND</label>
                                <input type="text" id="identity_number" name="identity_number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lop">Giới tính</label>
                                <input type="text" id="gender" name="gender" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lop">Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <button name="addCustomerBtn" class="btn btn-success">Thêm khách hàng</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function editFunction() {

            }
        </script>
        <?php require('inc/scripts.php') ?>
</body>

</html>