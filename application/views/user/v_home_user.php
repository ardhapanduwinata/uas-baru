<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home') ?>">Home <?= $siapa ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('user/manage_profile')?>">Manage Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#logout_modal" href="">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white">
    <div class="masthead-content"><br>
        <div class="container">
            <h1 class="masthead-heading mb-0">Sistem Informasi</h1>
            <h2 class="masthead-subheading mb-0">Perpustakaan</h2>
            <!--            <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>-->
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>

<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding: 40px">
            <h2>LOGIN</h2>
            <form action="<?php echo base_url('login/aksi_login_anggota'); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                    <input type="hidden" name="role" value="2">
                </div>
                <div class="form-group" style="float: right">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="logout_modal" tabindex="-1" role="dialog" aria-labelledby="logout_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('login/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
</div>

</body>