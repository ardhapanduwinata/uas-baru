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
                    <input type="text" name="nama" class="form-control" id="username" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                    <input type="hidden" name="role" value="2">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                    <input type="hidden" name="role" value="2">
                </div>
                <div class="form-group">
                    <label for="password">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
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
                                <input class="form-control" name="nama" id="nama" type="text" placeholder="Enter Name">
                            </div>
                            <div class="col-md-6">
                                <label for="username">Username</label>
                                <input class="form-control" name="username" id="username" type="text" placeholder="Enter Username">
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
                                <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label for="confirm_password">Confirm password</label>
                                <input class="form-control" name="confirm_password" id="confirm_password" type="password" placeholder="Confirm password">
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
                                <input class="form-control" name="nama" id="nama" type="text" placeholder="Enter Name">
                            </div>
                            <div class="col-md-6">
                                <label for="username">Username</label>
                                <input class="form-control" name="username" id="username" type="text" placeholder="Enter Username">
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
                                <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label for="confirm_password">Confirm password</label>
                                <input class="form-control" name="confirm_password" id="confirm_password" type="password" placeholder="Confirm password">
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