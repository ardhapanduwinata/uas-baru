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
            <li class="breadcrumb-item active">Data Buku</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Buku
                <a data-toggle="modal" data-target="#addbuku_modal">
                    <button class="btn btn-primary" style="float: right;"> Add Buku </button>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Gambar</th>
                            <th>Sinopsis</th>
                            <th>Kategori</th>
                            <th>Penerbit</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Gambar</th>
                            <th>Sinopsis</th>
                            <th>Kategori</th>
                            <th>Penerbit</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach($buku as $a) {?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $a->nama ?></td>
                                <td><center><img height="100px" src="<?= base_url('assets/gambar/'.$a->cover_buku)?>"></center></td>
                                <td><?= $a->sinopsis ?></td>
                                <td><?= $a->id_kategori ?></td>
                                <td><?= $a->id_penerbit ?></td>
                                <td><a class="btn btn-primary" href="<?= base_url('admin/edit_buku/'.$a->id)?>">Edit</a>
                                    <a class="btn btn-danger" onclick="return confirm('Anda Yakin?, Data akan dihapus Permanen!')" href="<?= base_url('admin/delete_buku/'.$a->id)?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
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