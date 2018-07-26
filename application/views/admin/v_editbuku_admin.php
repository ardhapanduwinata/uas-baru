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
            </div>
            <div class="card-body">
                <div>
                    <?php foreach($buku as $u) {?>
                    <form enctype="multipart/form-data" action="<?= base_url('admin/update_buku') ?>" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" name="nama" id="nama" type="text" value="<?= $u->nama ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="cover_buku">Gambar</label>
                                    <input class="form-control" name="cover_buku" id="cover_buku" type="file" value="<?= $u->cover_buku ?>">
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label for="sinopsis">Sinopsis</label>
                            <textarea class="form-control" name="sinopsis" id="sinopsis"><?= $u->sinopsis ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea class="form-control" name="isi" id="isi"><?= $u->isi ?></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="kategori">Kategori</label>
                                    <?php $kategori=$this->db->get('kategori') ?>
                                    <select class="form-control" name="kategori" id="">
                                        <?php foreach($kategori->result() as $key) {?>
                                            <option value="<?= $key->id ?>"><?= $key->nama_kategori ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="kategori">Penerbit</label>
                                    <?php $penerbit=$this->db->get('penerbit') ?>
                                    <select class="form-control" name="penerbit" id="">
                                        <?php foreach($penerbit->result() as $key) {?>
                                            <option value="<?= $key->id ?>"><?= $key->nama_penerbit ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="float: right">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <input type="hidden" name="id" value="<?= $u->id ?>">
                            <button class="btn btn-primary" type="submit">Add Buku</button>
                        </div>
                    </form>
                </div>
                <?php } ?>
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