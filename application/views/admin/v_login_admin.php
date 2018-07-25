<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title ?></title>
    <!-- Bootstrap core CSS-->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin.css') ?>" rel="stylesheet">
</head>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="<?php echo base_url('login/aksi_login_admin'); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" name="username" id="username" type="text" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" name="password" id="password" type="password" placeholder="Enter Password">
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="Login">
            </form>
        </div>
    </div>
</div>
</body>