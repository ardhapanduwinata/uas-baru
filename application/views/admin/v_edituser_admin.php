<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for...">
                <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#logout_modal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
    </li>
</ul>
</div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('admin') ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data User</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data User
            </div>
            <div class="card-body">
                <div>
                    <?php foreach($user as $u) {?>
                    <form action="<?= base_url('admin/update_user') ?>" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="hidden" name="id" value="<?= $u->id ?>">
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $u->nama_anggota ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="username">Username</label>
                                    <input class="form-control" name="username" id="username" type="text" value="<?= $u->username ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input class="form-control" name="email" id="email" type="email" value="<?= $u->email_anggota ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" name="password" id="password" type="text" value="<?= $u->password ?>">
                        </div>
                        <div>
                            <a class="btn btn-secondary" href="<?= base_url('admin/load_datauser') ?>">Cancel</a>
                            <button class="btn btn-primary" type="submit">Edit</button>
                        </div>
                    </form>
                <?php } ?>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Your Website 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
</body>