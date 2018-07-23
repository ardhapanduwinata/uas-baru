<body>
<h1>INI LOGIN</h1>
<form action="<?php echo base_url('login/aksi_login_anggota'); ?>" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="role" value="2"></td>
            <td><input type="submit" value="Login"></td>
        </tr>
    </table>
</form>
</body>