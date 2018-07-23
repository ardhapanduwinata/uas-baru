<body>
<form action="<?php echo base_url('login/aksi_signup') ?>" method="post">
    <table style="margin:20px auto;">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="role" value="2"></td>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>
</body>