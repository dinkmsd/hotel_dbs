<?php
// require('inc/essentials.php');
$id = $_GET['id'];

//ket noi
require_once 'inc/db_config.php';

//cau lenh de lay thong ve ve sinh vien co id = $id
$edit_sql = "SELECT * FROM customer WHERE customer_id=$id";

$result = mysqli_query($_GLOBALS['conn'], $edit_sql);
$row = mysqli_fetch_assoc($result);
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
        <h1>Sửa thông tin</h1>
        <form action="add_new_customer.php" method="post">
            <div class="form-group">
                <label for="cid">ID</label>
                <input type="text" id="cid" class="form-control" name="cid" value="<?php echo $row['customer_id'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="name">Họ tên</label>
                <input type="text" id="name" class="form-control" name="name" value="<?php echo $row['name'] ?>">
            </div>
            <div class="form-group">
                <label for="masv">Số điện thoại</label>
                <input type="text" name="number_phone" id="number_phone" class="form-control" value="<?php echo $row['number_phone'] ?>">
            </div>
            <div class="form-group">
                <label for="lop">CMND</label>
                <input type="text" id="identity_number" name="identity_number" class="form-control" value="<?php echo $row['identity_number'] ?>"> 
            </div>
            <div class="form-group">
                <label for="lop">Giới tính</label>
                <input type="text" id="gender" name="gender" class="form-control" value="<?php echo $row['gender'] ?>">
            </div>
            <div class="form-group">
                <label for="lop">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
            </div>
            <button class="btn btn-success" name="updateBtn">Cập nhật thông tin</button>
        </form>
    </div>
    <?php require('inc/scripts.php') ?>
</body>

</html>