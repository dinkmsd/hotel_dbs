<?php
function addNewCustomer()
{
    $name = $_POST['name'];
    $number_phone = $_POST['number_phone'];
    $identity_number = $_POST['identity_number'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    require('inc/db_config.php');

    $addQuery = "INSERT INTO customer (name, number_phone, identity_number, email, gender) VALUES ('$name', '$number_phone', '$identity_number', '$email', '$gender')";

    if (mysqli_query($_GLOBALS['conn'], $addQuery)) {
        header("Location: customer.php");
    }
}

function updateCustomer()
{
    $name = $_POST['name'];
    $number_phone = $_POST['number_phone'];
    $identity_number = $_POST['identity_number'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $id = $_POST['cid'];
    require('inc/db_config.php');
    $update = "UPDATE customer SET name='$name', number_phone= '$number_phone', identity_number='$identity_number', email='$email', gender='$gender' WHERE id=$id";
    if (mysqli_query($_GLOBALS['conn'], $update)) {
        header("Location: customer.php");
    }
}

function deleteCustomer(){
    $id = $_GET['id'];
    require_once 'inc/db_config.php';
    $delete = "DELETE FROM customer WHERE customer_id=$id";
    mysqli_query($_GLOBALS['conn'], $delete);
    header("Location: customer.php");
}

if(isset($_POST['addCustomerBtn'])) { 
    addNewCustomer(); 
}

if(isset($_POST['updateBtn'])) { 
    updateCustomer(); 
} 

if($_GET['action'] = 'delete') {
    deleteCustomer();
}
