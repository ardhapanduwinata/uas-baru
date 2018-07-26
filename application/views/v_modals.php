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

<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding: 40px">
            <h2>SIGN UP</h2>
            <form action="<?php echo base_url('login/aksi_signup'); ?>" method="post">
                <div class="form-group">
                    <label for="username">Nama</label>
                    <input type="text" name="nama" class="form-control" id="username" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
                    <input type="hidden" name="role" value="2">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                    <input type="hidden" name="role" value="2">
                </div>
                <div class="form-group">
                    <label for="password">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                    <input type="hidden" name="role" value="2">
                </div>
                <div class="form-group" style="float: right">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding: 40px">
            <h2>LOGIN</h2>
            <form action="<?php echo base_url('login/aksi_login_anggota'); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
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

<div class="modal fade" id="adduser_modal" tabindex="-1" role="dialog" aria-labelledby="adduser_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/add_datauser') ?>" method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="nama">Nama</label>
                                <input class="form-control" name="nama" id="nama" type="text" placeholder="Enter Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="username">Username</label>
                                <input class="form-control" name="username" id="username" type="text" placeholder="Enter Username" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input class="form-control" name="email" id="email" type="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="col-md-6">
                                <label for="confirm_password">Confirm password</label>
                                <input class="form-control" name="confirm_password" id="confirm_password" type="password" placeholder="Confirm password" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer" style="float: right">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Add User</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addadmin_modal" tabindex="-1" role="dialog" aria-labelledby="addadmin_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/add_dataadmin') ?>" method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="nama">Nama</label>
                                <input class="form-control" name="nama" id="nama" type="text" placeholder="Enter Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="username">Username</label>
                                <input class="form-control" name="username" id="username" type="text" placeholder="Enter Username" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input class="form-control" name="email" id="email" type="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="col-md-6">
                                <label for="confirm_password">Confirm password</label>
                                <input class="form-control" name="confirm_password" id="confirm_password" type="password" placeholder="Confirm password" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer" style="float: right">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Add Admin</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="delete_user" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">The data will be <b>Permanently</b> deleted.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('admin/delete_user/'.$a->id)?>">Delete</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addbuku_modal" tabindex="-1" role="dialog" aria-labelledby="addbuku_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Buku</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="<?= base_url('admin/add_databuku') ?>" method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="nama">Nama</label>
                                <input class="form-control" name="nama" id="nama" type="text" placeholder="Enter Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cover_buku">Gambar</label>
                                <input class="form-control" name="cover_buku" id="cover_buku" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis" id="sinopsis" placeholder="Enter Sinopsis" required></textarea>
                    </div>
                    <div class="field">
                        <label for="isi">Isi</label>
                        <textarea class="form-control" name="isi" id="isi" placeholder="Enter Isi" required></textarea>
                    </div>
                        <label for="kategori">Kategori</label>
                        <?php $kategori=$this->db->get('kategori') ?>
                        <select class="form-control" name="kategori" id="" required>
                            <?php foreach($kategori->result() as $key) {?>
                                <option value="<?= $key->id ?>"><?= $key->nama_kategori ?></option>
                            <?php } ?>
                        </select>

                        <label for="kategori">Penerbit</label>
                        <?php $penerbit=$this->db->get('penerbit') ?>
                        <select class="form-control" name="penerbit" id="" required>
                            <?php foreach($penerbit->result() as $key) {?>
                                <option value="<?= $key->id ?>"><?= $key->nama_penerbit ?></option>
                            <?php } ?>
                        </select>
                    <div class="modal-footer" style="float: right">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Add Buku</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addpenerbit_modal" tabindex="-1" role="dialog" aria-labelledby="addpenerbit_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Penerbit</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/add_penerbit') ?>" method="post">
                    <div class="form-group">
                        <label for="id">Id Penerbit</label>
                        <input class="form-control" name="id" id="email" type="text" placeholder="Enter Penerbit Id" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Penerbit</label>
                        <input class="form-control" name="nama" id="email" type="text" placeholder="Enter Penerbit Name" required>
                    </div>
                    <div style="float: right;">
                        <a class="btn btn-secondary" href="<?= base_url('admin/load_penerbit') ?>">Cancel</a>
                        <button class="btn btn-primary" type="submit">Add Penerbit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addkategori_modal" tabindex="-1" role="dialog" aria-labelledby="addkategori_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Pengarang</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/add_kategori') ?>" method="post">
                    <div class="form-group">
                        <label for="id">Id Kategori</label>
                        <input class="form-control" name="id" id="email" type="text" placeholder="Enter Kategori Id" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input class="form-control" name="nama" id="email" type="text" placeholder="Enter Kategori Name" required>
                    </div>
                    <div style="float: right;">
                        <a class="btn btn-secondary" href="<?= base_url('admin/load_kategori') ?>">Cancel</a>
                        <button class="btn btn-primary" type="submit">Add Kategori</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>