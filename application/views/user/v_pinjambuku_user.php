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

<?php foreach ($buku as $b) {?>
    <div class="container">
        <div class="row col">
            <div class="col-md-4"><br><br>
                <div class="card" style="width: 18rem;" >
                    <img class="card-img-top" src="<?= base_url('assets/gambar/'.$b->cover_buku) ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $b->nama ?>e</h5>
                        <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                    </div>
                </div>
            </div>
            <div class="col" style="padding-top: 100px">
                <div class="card">
                    <div class="card-body">
                        <?= $b->isi ?>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success" style="float: right" href="<?= base_url('user/pinjam_buku/'.$b->id)?>">Pinjam Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
