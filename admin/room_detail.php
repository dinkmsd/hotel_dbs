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
    <div class="p-3">
        <div class='d-flex'>
            <div style="flex: 2" class="border rounded border-secondary m-3 p-3">
                <h3>Chọn khách hàng</h3>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cơm chiên trứng</td>
                            <td>1</td>
                            <td>100000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Sườn xào chua ngọt</td>
                            <td>2</td>
                            <td>20000</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Trứng luộc</td>
                            <td>1</td>
                            <td>10000</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <tr>
                        <th>Tổng phụ</th>
                        <td>600000.0 VNĐ</td>
                        <td>4 dịch vụ dùng thêm</td>
                    </tr>
                    <tr>
                        <th>Thuế</th>
                        <td>0%</td>
                        <td>0.0 VNĐ</td>
                    </tr>
                    <tr>
                        <th>Giảm giá</th>
                        <td>N/A</td>
                        <td>0.0 VNĐ</td>
                    </tr>
                    <tr>
                        <th>Tổng</th>
                        <td>0</td>
                        <td></td>
                    </tr>
                </table>
                <button type="button" class="btn btn-danger btn-lg">Hủy</button>
                <button type="button" class="btn btn-success btn-lg">Thanh toán</button>
            </div>
            <div style="flex: 3" class="border rounded border-secondary m-3 p-3">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Nhà</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mở phòng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Điểm tâm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giặt ủi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nước uống</a>
                    </li>
                </ul>
                <hr class="hr" />
                <div class="d-flex flex-wrap pt-3">
                    <div class="card text-white bg-primary mb-3 m-3" style="width: 18rem;">
                        <div class="card-header">Cơm chiến trứng</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3 m-3" style="width: 18rem;">
                        <div class="card-header">Sườn xào chua ngọt</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3 m-3" style="width: 18rem;">
                        <div class="card-header">Trứng chiên</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3 m-3" style="width: 18rem;">
                        <div class="card-header">Trứng luộc nước mắm</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3 m-3" style="width: 18rem;">
                        <div class="card-header">101</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3 m-3" style="width: 18rem;">
                        <div class="card-header">101</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php require('inc/scripts.php') ?>
</body>

</html>