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
        <ul class="nav nav-tabs pt-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Tầng 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Tầng 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Tầng 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Tầng 4</a>
            </li>
        </ul>
        <div class='d-flex flex-wrap pt-3'>
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
            <div class="card text-white bg-primary mb-3 m-3" style="width: 18rem;">
                <div class="card-header">101</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

    </div>
    <?php require('inc/scripts.php') ?>
</body>

</html>