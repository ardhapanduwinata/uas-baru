<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="<?php echo base_url('login/aksi_login_admin'); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" name="username" id="username" type="text" aria-describedby="emailHelp" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="Login">
            </form>
        </div>
    </div>
</div>
</body>