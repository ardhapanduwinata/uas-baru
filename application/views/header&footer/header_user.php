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
    <link rel="stylesheet" href="<?php echo base_url('semantic/dist/semantic.min.css') ?>">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin.css') ?>" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?= base_url('user/manage_profile') ?>">Hello <?= $siapa ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data User">
                <a class="nav-link" href="<?= base_url('user/daftar_buku') ?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Daftar Buku</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Admin">
                <a class="nav-link" href="<?= base_url('user/peminjaman') ?>">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Peminjaman</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Admin">
                <a class="nav-link" href="<?= base_url('user/riwayat') ?>">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Riwayat Peminjaman</span>
                </a>
            </li>
        </ul>